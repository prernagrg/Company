<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = Testimonial::query()->paginate(5);
        $files = File::query()->paginate(5);
        return view('Company.admin.testimonials.index',compact('testimonials','files'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $files = File::query()->paginate(8);
        return view('Company.admin.testimonials.create',compact('files'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $testimonial = new Testimonial;
        $request->validate([
            'img'=>'required|max:150',
            'name'=>'required|max:150',
            'position'=>'required|max:150',
            'description'=>'required',
        ]);
        $testimonial->img = $request->img;
        $testimonial->name = $request->name;
        $testimonial->position = $request->position;
        $testimonial->description = $request->description;
        $testimonial->save();
        return redirect('/admin/Testimonials')->with('message','Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $files = File::query()->paginate(8);
        $testimonial = Testimonial::query()->where('id',$id)->get()->first();
        return view('Company.admin.testimonials.view',compact('files','testimonial'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $files = File::query()->paginate(8);
        $testimonial = Testimonial::query()->where('id',$id)->get()->first();
        return view('Company.admin.testimonials.edit',compact('files','testimonial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $testimonial = new Testimonial;
        $testimonial = $testimonial->where('id',$id)->get()->first();
        $request->validate([
            'img'=>'required|max:150',
            'name'=>'required|max:150',
            'position'=>'required|max:150',
            'description'=>'required',
        ]);
        $testimonial->img = $request->img;
        $testimonial->name = $request->name;
        $testimonial->position = $request->position;
        $testimonial->description = $request->description;
        $testimonial->update();
        return redirect('/admin/Testimonials')->with('message','Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $testimonial = Testimonial::query()->where('id',$id)->get()->first();
        $testimonial->delete();
        return redirect('/admin/Testimonials')->with('message','Deleted Successfully');
    }
}
