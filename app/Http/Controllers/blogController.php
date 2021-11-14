<?php

namespace App\Http\Controllers;

use App\Models\blogModel;
use Illuminate\Http\Request;

class blogController extends Controller
{
    protected $imgPath= 'assets/blogimg/';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('createPost');
    }
    public function allPost()
    {
        $posts=blogModel::all();

        return view('blog.viewPost',[
            'blogpost'=>$posts,
        ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $blogpost= blogModel::all();

        return view('blog',[
            'blogpost'=>$blogpost,
            'imgPath'=>$this->imgPath
        ]);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'user_id'=>'required',
            'description' => 'required',
            'image'=>'required',
        ]);
        //store image
        $imgName=date('Y-m-d-His').'.'. $request->image->extension();
        $imgPath= public_path('assets\blogimg');

        //upload img
        $upload= $request->image->move($imgPath,$imgName);

        // inser data into database

        $obj= new blogModel();
         $obj->title=$request->get('title');
        $obj->user_id=$request->get('user_id');

        $obj->description=$request->get('description');

        $obj->image=$imgName;

        //dd($imgName,$imgPath,$request->all());

        if ($obj->save())
        {
            return redirect('blog')->with('success', 'Successfully you blog post upload !');

        }
        else {
            return redirect('blogPost')->with('errorMsg', 'Sorry! there are wrong process');
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $info=blogModel::find($id);
        return view('blog.yourPost',[
            'post'=>$info,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete= blogModel::destroy($id);
        if ($delete) {
            return redirect('allPost')->with('success', 'Successfully Deleted!');
        }
        else {
            return redirect('allPost')->with('errorMsg', 'Delete Failed!');
        }
    }
}
