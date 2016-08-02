<?php

namespace App\Http\Controllers\Admin;

use App\Models\Lists;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class ListsController extends Controller
{
    public function index(){

        $data    = Lists::all();
        return view('admin.lists.index')->with(compact('data'));
    }

    public function create(){
        $parents    = Lists::where('parent_id', 0)->lists('name', 'id')->toArray();
        return view('admin.lists.edit')->with(compact('parents'));
    }

    public function store(Request $request, $id)
    {
        $rules = array(
            'name'          => 'required'
        );

        $this->validate($request, $rules);

        return $this->save($request, $id);
    }

    private function save(Request $request, $product_id, $id = null){
        // store
        if (!isset($id)) {
            $data = new MenuProducts();
        }else{
            $data = MenuProducts::find($id);
        }

        $data->name              = $request->name;
        $data->created_at        = $request->date;
        $data->description       = $request->description;
        $data->price             = $request->price;
        $data->product_id        = $product_id;
        $data->category_id       = $request->category_id;
        $data->meta_description  = $request->meta_description;
        $data->meta_keywords     = $request->meta_keywords;
        $data->title             = $request->title;

        $data->save();

        $this->UpdatePhotos($request, $data->id);

        // redirect
        Session::flash('message', trans('common.saved'));
        return redirect()->route('admin.menu', $product_id);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $data       = MenuProducts::find($id);
        $categories = MenuCategories::lists('name','id')->toArray();
        $product    = Products::find($data->product_id);

        return view('admin.menu.edit')->with(compact('data', 'categories', 'product'));



        //$parents = $data->parents->pluck('id')->toArray();
        //return view('admin.categories.edit')->with('data', $data)->with('categories', $categories)->with('parents',$parents);
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
            'name'          => 'required'
        );

        $this->validate($request, $rules);

        $data       = MenuProducts::find($id);

        return $this->save($request, $data->product_id, $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        MenuProducts::destroy($id);
        Session::flash('message', trans('common.deleted'));
        return back();
    }

}
