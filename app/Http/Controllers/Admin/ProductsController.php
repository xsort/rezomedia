<?php

namespace App\Http\Controllers\Admin;

use App\Models\Contacts;
use App\Models\Features;
use App\Models\Lists;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\Categories;


class ProductsController extends Controller
{
    public function index(){
        $data = Products::all();
        return view('admin.products.index')->with(compact('data'));
    }

    public function create(){
        $products               = Products::lists('name','id')->toArray();
        $categories             = Categories::lists('name','id')->toArray();
        $features               = Features::all();
        $features_custom_list   = Lists::where('slug', 'features-custom')->first()->children;
        $features_custom        = [];
        foreach($features_custom_list as $fc){
            $features_custom[] = ['id' => $fc['id'], 'name' => $fc['name'], 'value' => ''];
        }
        return view('admin.products.edit')->with(compact('categories','contacts','features','products','features_custom'));
    }

    public function store(Request $request)
    {
        $rules = array(
            'name'          => 'required',
            'slug'          => 'required|unique:products'
        );

        $this->validate($request, $rules);

        return $this->save($request, null);
    }

    private function save(Request $request, $id){
        // store
        if (!isset($id)) {
            $data = new Products();
        }else{
            $data = Products::find($id);
        }


        if ($request->top) {
            $data->top = $request->top;
        }
        $data->name              = $request->name;
        $data->created_at        = $request->date;
        $data->slug              = $request->slug;
        $data->description       = $request->description;
        $data->description_short = $request->description_short;
        $data->meta_description  = $request->meta_description;
        $data->meta_keywords     = $request->meta_keywords;
        $data->title             = $request->title;
        $data->price             = $request->price;
        $data->price_discount    = $request->price_discount;
        $data->instructions      = $request->instructions;
        $data->soft              = $request->soft;

        //custom text features
        if ($request->features_custom){
            $data->features_custom = serialize($request->features_custom);
        }


        //SAVING PRODUCTS
        $data->save();
        
        $this->UpdatePhotos($request, $data->id);
        
        //categories
        if ($request->parent) {
            $data->parents()->sync($request->parent);
        }

        //recommended
        if ($request->recommended) {
            $data->recommended()->sync($request->recommended);
        }

        //features
        if ($request->features_values) {
            foreach($request->features_values as $key => $features_values){
                foreach($features_values as $value) {
                    $cur_value = DB::table('features_products')->where('products_id', $data->id)->where('features_id', $key)->where('value', $value)->first();

                    $insert_data = [    'features_id'  => $key,
                                        'value'        => $value,
                                        'products_id'  => $data->id
                                    ];

                    if (empty($cur_value)){
                        DB::table('features_products')->insert($insert_data);
                    }else{
                        DB::table('features_products')->where('products_id', $data->id)->where('features_id', $key)->whereNotIn('value', [$value])->delete();
                        DB::table('features_products')->where('id', $cur_value->id)->update($insert_data);
                    }
                }
            }
        }


        // redirect
        Session::flash('message', trans('common.saved'));
        return redirect('admin/products');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $data              = Products::find($id);
        $categories        = Categories::lists('name','id')->toArray();
        $products          = Products::lists('name','id')->toArray();
        $parents           = $data->parents->pluck('id')->toArray();
        $recommended       = $data->recommended->pluck('id')->toArray();
        $features          = Features::all();
        $features_values   = [];
        foreach($data->features as $f){
            $features_values[] = $f->pivot->value;
        }

        $features_custom_list = Lists::where('slug', 'features-custom')->first()->children;
        $db_features_custom   = unserialize($data->features_custom);
        $features_custom      = [];
        foreach($features_custom_list as $fc){
            $value = "";
            if ($db_features_custom){
                $value = $db_features_custom[$fc['id']];
            }
            $features_custom[] = ['id' => $fc['id'], 'name' => $fc['name'], 'value' => $value];
        }

        return view('admin.products.edit')->with(compact('data','categories','parents','features','features_values','products','recommended','features_custom'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $rules = array(
            'name'          => 'required',
            'slug'          => 'required|unique:products,id,{$id}'
        );

        $this->validate($request, $rules);

        return $this->save($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        Products::destroy($id);
        Session::flash('message', trans('common.deleted'));
        return back();
    }
}
