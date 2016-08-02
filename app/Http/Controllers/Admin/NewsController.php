<?php

namespace App\Http\Controllers\Admin;

use App\Models\Content;
use App\Models\News;
use App\Models\Tags;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Validator;

class NewsController extends Controller
{
    public function index(){
        $data = News::all();
        return view('admin.news.index')->with(compact('data'));
    }

    public function create(){
        $tags = Tags::all();
        return view('admin.news.edit')->with(compact('tags'));
    }

    public function store(Request $request)
    {
        $rules = array(
            'name'          => 'required',
            'slug'          => 'required|unique:content'
        );

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'data'    => $validator->messages()
            ]);
        }

        return $this->save($request);
    }

    private function save(Request $request, $id = null){
        //photos
        //dd($request->photos);

        // store
        if (!isset($id)) {
            $data = new News();
        }else{
            $data = News::find($id);
        }

        $data->name              = $request->name;
        $data->top               = $request->top;
        $data->created_at        = $request->date;
        $data->slug              = $request->slug;
        $data->description       = $request->description;
        $data->description_short = $request->description_short;
        $data->meta_description  = $request->meta_description;
        $data->meta_keywords     = $request->meta_keywords;
        $data->title             = $request->title;
        $data->save();

        //tags
        if ($request->chosencat) {
            $data->tags()->sync($request->chosencat);
        }

        $this->UpdatePhotos($request, $data->id);

        return response()->json([
            'success' => true,
            'data'    => ['table' => 'news', 'id' => $data->id, 'name' => $data->name]
        ]);
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
        $data = News::find($id);
        $tags = Tags::all();
        return view('admin.news.edit')->with(compact('data'))
                                      ->with(compact('tags'));
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
            'slug'          => 'required|unique:news,id,{$id}'
        );

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'data'    => $validator->messages()
            ]);
        }

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
        Content::destroy($id);
        Session::flash('message', trans('common.deleted'));
        return back();
    }

}
