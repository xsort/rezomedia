<?php

namespace App\Http\Controllers\Admin;

use App\Models\Lists;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class ListsController extends Controller
{
    public function index(Request $request){
        $id      = $request->id;

       if ($id > 0){
           $data    = Lists::find($id)->children;
       }else{
           $data    = Lists::all();
       }

        $parents = $this->getParentsArray();
        return view('admin.lists.index')->with(compact('data','parents','id'));
    }

    public function create(){
        $parents    = $this->getParentsArray();
        return view('admin.lists.edit')->with(compact('parents'));
    }

    public function store(Request $request)
    {
        $rules = array(
            'name'          => 'required'
        );

        $this->validate($request, $rules);

        return $this->save($request);
    }

    private function save(Request $request, $id = null){
        // store
        if (!isset($id)) {
            $data = new Lists();
        }else{
            $data = Lists::find($id);
        }

        $data->name              = $request->name;
        $data->created_at        = $request->date;
        $data->slug              = $request->slug;
        $data->parent_id         = $request->parent_id;
        $data->description       = $request->description;
        $data->description_short = $request->description_short;
        $data->meta_description  = $request->meta_description;
        $data->meta_keywords     = $request->meta_keywords;
        $data->title             = $request->title;

        $data->save();

        $this->UpdatePhotos($request, $data->id);

        // redirect
        Session::flash('message', trans('common.saved'));
        return redirect('admin/lists');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $data       = Lists::find($id);
        $parents    = $this->getParentsArray();

        return view('admin.lists.edit')->with(compact('data', 'parents'));



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
        MenuProducts::destroy($id);
        Session::flash('message', trans('common.deleted'));
        return back();
    }

    private function getParentsArray(){
        return Lists::where('parent_id', 0)->lists('name', 'id')->toArray();
    }

}
