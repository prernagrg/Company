<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\Web;
use Illuminate\Http\Request;

class WebController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $files = File::query()->paginate(8);
        $webs = Web::query()->paginate(5);
        return view('Company.admin.web.index', compact('files','webs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $files = File::query()->paginate(8);
        return view('Company.admin.web.create',compact('files'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $web = new Web;
        $request->validate([
            'img'=>'required|max:150',
            'title'=>'required|max:150|string',
            'sub_title'=>'required|max:150|string'
        ]);
        $web->img = $request->img;
        $web->title = $request->title;
        $web->sub_title = $request->sub_title;
        $web->save();
        return redirect('/admin/Web')->with('message','Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $files = File::query()->paginate(8);
        $web = Web::query()->where('id',$id)->get()->first();
        return view('Company.admin.web.view',compact('files','web'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $files = File::query()->paginate(8);
        $web = Web::query()->where('id',$id)->get()->first();
        return view('Company.admin.web.edit',compact('files','web'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $web = new Web;
        $web = $web->where('id',$id)->get()->first();
        $request->validate([
            'img'=>'required|max:150',
            'title'=>'required|max:150|string',
            'sub_title'=>'required|max:150|string'
        ]);
        $web->img = $request->img;
        $web->title = $request->title;
        $web->sub_title = $request->sub_title;
        $web->update();
        return redirect('/admin/Web')->with('message','updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $web = Web::query()->where('id',$id)->get()->first();
        $web->delete();
        return redirect('/admin/Web')->with('message','Deleted Successfully');
    }
}
