<?php

namespace App\Http\Controllers;

use App\Models\Cmnt_rly;
use App\Models\File;
use Illuminate\Http\Request;

class CmntRlyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cmnt_rlys = Cmnt_rly::query()->paginate(5);
        $files = File::query()->paginate(5);
        return view('Company.admin.cmnt_rly.index',compact('files','cmnt_rlys'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $files = File::query()->paginate(5);
        return view('Company.admin.cmnt_rly.create',compact('files'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $cmnt_rly = new Cmnt_rly;
        $request->validate([
            'img'=>'required|max:150',
            'name'=>'required|max:150',
            'date'=>'required|max:150',
            'description'=>'required'
        ]);
        $cmnt_rly->img = $request->img;
        $cmnt_rly->name = $request->name;
        $cmnt_rly->date = $request->date;
        $cmnt_rly->description = $request->description;
        $cmnt_rly->save();
        return redirect('/admin/Cmnt_rly')->with('message','Added Comment reply Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $files = File::query()->paginate(5);
        $cmnt_rly = Cmnt_rly::query()->where('id',$id)->get()->first();
        return view('Company.admin.cmnt_rly.view',compact('files','cmnt_rly'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $files = File::query()->paginate(5);
        $cmnt_rly = Cmnt_rly::query()->where('id',$id)->get()->first();
        return view('Company.admin.cmnt_rly.edit',compact('files','cmnt_rly'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $cmnt_rly = new Cmnt_rly;
        $cmnt_rly = $cmnt_rly->where('id',$id)->get()->first();
        $request->validate([
            'img'=>'required|max:150',
            'name'=>'required|max:150',
            'date'=>'required|max:150',
            'description'=>'required'
        ]);
        $cmnt_rly->img = $request->img;
        $cmnt_rly->name = $request->name;
        $cmnt_rly->date = $request->date;
        $cmnt_rly->description = $request->description;
        $cmnt_rly->update();
        return redirect('/admin/Cmnt_rly')->with('message','Updated Comment replies Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $cmnt_rly = Cmnt_rly::query()->where('id',$id)->get()->first();
        $cmnt_rly->delete();
        return redirect('/admin/Cmnt_rly')->with('message','Deleted Comment replies Successfully');
    }
}
