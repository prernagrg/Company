<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $abouts = About::query()->paginate(5);
        return view('Company.admin.about.index', compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Company.admin.about.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request);
        $about= new About;
        $request->validate([
            'subtitle'=>'required|max:150',
            'title'=>'required|max:150|string',
            'description'=>'required'
        ]);
        $about->title = $request->title;
        $about->subtitle = $request->subtitle;
        $about->description = $request->description;
        $about->save();
        return redirect('/admin/About')->with('message', ' Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $about = About::query()->where('id',$id)->get()->first();
        return view('Company.admin.about.view', compact('about'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $about = About::query()->where('id',$id)->get()->first();
        return view('Company.admin.about.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $about= new About;
        $about = $about->where('id',$id)->get()->first();
        $request->validate([
            'subtitle'=>'required|max:150',
            'title'=>'required|max:150|string',
            'description'=>'required'
        ]);
        $about->title = $request->title;
        $about->subtitle = $request->subtitle;
        $about->description = $request->description;
        $about->update();
        return redirect('/admin/About')->with('message', ' Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $about = About::query()->where('id',$id)->get()->first();
        $about->delete();
        return redirect('/admin/About')->with('message', 'Deleted successfully');
    }
}
