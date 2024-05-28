<?php

namespace App\Http\Controllers;

use App\Models\App;
use App\Models\File;
use Illuminate\Http\Request;

class AppController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $apps = App::query()->paginate(5);
        $files = File::query()->paginate(5);
        return view('Company.admin.app.index',compact('apps','files'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $files = File::query()->paginate(5);
        return view('Company.admin.app.create',compact('files'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $app = new App;
        $request->validate([
            'img'=>'required|max:150',
            'title'=>'required|max:150|string',
            'sub_title'=>'required|max:150|string'
        ]);
        $app->img = $request->img;
        $app->title = $request->title;
        $app->sub_title = $request->sub_title;
        $app->save();
        return redirect('/admin/App')->with('message','Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $files = File::query()->paginate(5);
        $app = App::query()->where('id',$id)->get()->first();
        return view('Company.admin.app.view',compact('files','app'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $files = File::query()->paginate(5);
        $app = App::query()->where('id',$id)->get()->first();
        return view('Company.admin.app.edit',compact('files','app'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $app = new App;
        $app = $app->where('id',$id)->get()->first();
        $request->validate([
            'img'=>'required|max:150',
            'title'=>'required|max:150|string',
            'sub_title'=>'required|max:150|string'
        ]);
        $app->img = $request->img;
        $app->title = $request->title;
        $app->sub_title = $request->sub_title;
        $app->update();
        return redirect('/admin/App')->with('message','Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $app = App::query()->where('id',$id)->get()->first();
        $app->delete();
        return redirect('/admin/App')->with('message','Deleted Successfully');
    }
}
