<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\File;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comments = Comment::query()->paginate(5);
        $files = File::query()->paginate(5);
        return view('Company.admin.comments.index',compact('comments','files'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $files = File::query()->paginate(5);
        return view('Company.admin.comments.create',compact('files'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $comment = new Comment;
        $request->validate([
            'img'=>'required|max:150',
            'name'=>'required|max:150',
            'date'=>'required|max:150',
            'description'=>'required'
        ]);
        $comment->img = $request->img;
        $comment->name = $request->name;
        $comment->date = $request->date;
        $comment->description = $request->description;
        $comment->save();
        return redirect('/admin/Comments')->with('message','Added Comments Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $files = File::query()->paginate(5);
        $comment = Comment::query()->where('id',$id)->get()->first();
        return view('Company.admin.comments.view',compact('files','comment'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $files = File::query()->paginate(5);
        $comment = Comment::query()->where('id',$id)->get()->first();
        return view('Company.admin.comments.edit',compact('files','comment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $comment = new Comment;
        $comment = $comment->where('id',$id)->get()->first();
        $request->validate([
            'img'=>'required|max:150',
            'name'=>'required|max:150',
            'date'=>'required|max:150',
            'description'=>'required'
        ]);
        $comment->img = $request->img;
        $comment->name = $request->name;
        $comment->date = $request->date;
        $comment->description = $request->description;
        $comment->update();
        return redirect('/admin/Comments')->with('message','Updated Comments Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $comment = Comment::query()->where('id',$id)->get()->first();
        $comment->delete();
        return redirect('/admin/Comments')->with('message','Deleted Comments Successfully');
    }
}
