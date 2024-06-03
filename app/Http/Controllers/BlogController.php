<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\File;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::query()->paginate(5);
        $files = File::query()->paginate(8);
        return view('Company.admin.blog.index',compact('blogs','files'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $files = File::query()->paginate(8);
        return view('Company.admin.blog.create',compact('files'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $blog = new Blog;
        $request->validate([
            'img'=>'required|max:150',
            'title'=>'required|max:150',
            'name'=>'required|max:150',
            'date'=>'required|max:150',
            'comment'=>'required|max:150',
            'description'=>'required'
        ]);
        $blog->img = $request->img;
        $blog->title = $request->title;
        $blog->name = $request->name;
        $blog->date = $request->date;
        $blog->comment = $request->comment;
        $blog->description = $request->description;
        $blog->save();
        return redirect('/admin/Blogs')->with('message','Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $files = File::query()->paginate(8);
        $blog = Blog::query()->where('id',$id)->get()->first();
        return view('Company.admin.blog.view',compact('files','blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $files = File::query()->paginate(8);
        $blog = Blog::query()->where('id',$id)->get()->first();
        return view('Company.admin.blog.edit',compact('files','blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $blog = new Blog;
        $blog = $blog->where('id',$id)->get()->first();
        $request->validate([
            'img'=>'required|max:150',
            'title'=>'required|max:150',
            'name'=>'required|max:150',
            'date'=>'required|max:150',
            'comment'=>'required|max:150',
            'description'=>'required'
        ]);
        $blog->img = $request->img;
        $blog->title = $request->title;
        $blog->name = $request->name;
        $blog->date = $request->date;
        $blog->comment = $request->comment;
        $blog->description = $request->description;
        $blog->update();
        return redirect('/admin/Blogs')->with('message','Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $blog = Blog::query()->where('id',$id)->get()->first();
        $blog->delete();
        return redirect('/admin/Blogs')->with('message','Deleted Successfully');
    }
}
