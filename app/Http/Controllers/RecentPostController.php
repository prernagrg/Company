<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\Recent_post;
use Illuminate\Http\Request;

class RecentPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $recent_posts = Recent_post::query()->paginate(5);
        $files = File::query()->paginate(5);
        return view('Company.admin.recent_post.index',compact('recent_posts','files'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $files = File::query()->paginate(5);
        return view('Company.admin.recent_post.create',compact('files'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $recent_post = new Recent_post;
        $request->validate([
            'img'=>'required|max:150',
            'title'=>'required|max:150',
            'date'=>'required|max:150',
            
        ]);
        $recent_post->img = $request->img;
        $recent_post->title = $request->title;
        $recent_post->date = $request->date;
        $recent_post->save();
        return redirect('/admin/Recent_posts')->with('message','Added  Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $files = File::query()->paginate(5);
        $recent_post = Recent_post::query()->where('id',$id)->get()->first();
        return view('Company.admin.recent_post.view',compact('files','recent_post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $files = File::query()->paginate(5);
        $recent_post = Recent_post::query()->where('id',$id)->get()->first();
        return view('Company.admin.recent_post.edit',compact('files','recent_post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $recent_post = new Recent_post;
        $recent_post = $recent_post->where('id',$id)->get()->first();
        $request->validate([
            'img'=>'required|max:150',
            'title'=>'required|max:150',
            'date'=>'required|max:150',
            
        ]);
        $recent_post->img = $request->img;
        $recent_post->title = $request->title;
        $recent_post->date = $request->date;
        $recent_post->update();
        return redirect('/admin/Recent_posts')->with('message','updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $recent_post = Recent_post::query()->where('id',$id)->get()->first();
        $recent_post->delete();
        return redirect('/admin/Recent_posts')->with('message','Deleted Successfully');
    }
}
