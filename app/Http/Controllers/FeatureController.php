<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $features = Feature::query()->paginate(8);
        return view('Company.admin.feature.index', compact('features'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Company.admin.feature.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $feature = new Feature;
        $request->validate([
            'icon'=>'required|max:150',
            'title'=>'required|max:150'
        ]);
        $feature->icon = $request->icon;
        $feature->title = $request->title;
        $feature->save();
        return redirect('/admin/Feature')->with('message','Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $feature = Feature::query()->where('id',$id)->get()->first();
        return view('Company.admin.feature.view', compact('feature'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $feature = Feature::query()->where('id',$id)->get()->first();
        return view('Company.admin.feature.edit', compact('feature'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $feature = new Feature;
        $feature = $feature->where('id',$id)->get()->first();
        $request->validate([
            'icon'=>'required|max:150',
            'title'=>'required|max:150'
        ]);
        $feature->icon = $request->icon;
        $feature->title = $request->title;
        $feature->update();
        return redirect('/admin/Feature')->with('message','Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $feature = Feature::query()->where('id',$id)->get()->first();
        $feature->delete();
        return redirect('/admin/Feature')->with('message','Deleted successfully');
    }
}
