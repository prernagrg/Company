<?php

namespace App\Http\Controllers;

use App\Models\Blog_single;
use App\Models\File;
use Illuminate\Http\Request;

class BlogSingleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blog_singles = Blog_single::query()->paginate(5);
        $files = File::query()->paginate(8);
        return view('Company.admin.blog_single.index',compact('blog_singles','files'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $files = File::query()->paginate(8);
        return view('Company.admin.blog_single.create',compact('files'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $blog_single = new Blog_single;
        $request->validate([
            'img'=>'required|max:150',
            'title'=>'required|string',
            'quote'=>'required|string',
            'description'=>'required'
        ]);
        $blog_single->img = $request->img;
        $blog_single->title = $request->title;
        $blog_single->quote = $request->quote;
        $blog_single->description = $request->description;
        $blog_single->save();
        return redirect('/admin/Blog_single')->with('message','Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $files = File::query()->paginate(8);
        $blog_single= Blog_single::query()->where('id',$id)->get()->first();
        return view('Company.admin.blog_single.view',compact('files','blog_single'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $files = File::query()->paginate(8);
        $blog_single= Blog_single::query()->where('id',$id)->get()->first();
        return view('Company.admin.blog_single.edit',compact('files','blog_single'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $blog_single = new Blog_single;
        $blog_single = $blog_single->where('id',$id)->get()->first();
        $request->validate([
            'img'=>'required|max:150',
            'title'=>'required|string',
            'quote'=>'required|string',
            'description'=>'required'
        ]);
        $blog_single->img = $request->img;
        $blog_single->title = $request->title;
        $blog_single->quote = $request->quote;
        $blog_single->description = $request->description;
        $blog_single->update();
        return redirect('/admin/Blog_single')->with('message','Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $blog_single= Blog_single::query()->where('id',$id)->get()->first();
        $blog_single->delete();
        return redirect('/admin/Blog_single')->with('message','Deleted Successfully');
    }
}
