<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use App\Models\File;
use Illuminate\Http\Request;

class CarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carousels = Carousel::query()->paginate(5);
        return view('Company.admin.carousel.index', compact('carousels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $files = File::query()->paginate(4);
        return view('Company.admin.carousel.create',compact('files'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request);
        $carousel = new Carousel;
        $request->validate([
            'img'=>'required|max:150',
            'title'=>'required|max:150|string',
            'description'=>'required|max:150|string',
        ]);
        $carousel->img = $request->img;
        $carousel->title = $request->title;
        $carousel->description = $request->description;
        $carousel->save();
        return redirect('/admin/Carousel')->with('message','Added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $files = File::query()->paginate(4);
        $carousel = Carousel::query()->where('id',$id)->get()->first();
        return view('Company.admin.carousel.view', compact('carousel','files'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $files = File::query()->paginate(4);
        $carousel = Carousel::query()->where('id',$id)->get()->first();
        return view('Company.admin.carousel.edit', compact('carousel','files'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $carousel = new Carousel;
        $carousel = $carousel->where('id',$id)->get()->first();
        $request->validate([
            'img'=>'required|max:150',
            'title'=>'required|max:150|string',
            'description'=>'required|max:150|string',
        ]);
        $carousel->img = $request->img;
        $carousel->title = $request->title;
        $carousel->description = $request->description;
        $carousel->update();
        return redirect('/admin/Carousel')->with('message','Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $carousel = Carousel::query()->where('id',$id)->get()->first();
        $carousel->delete();
        return redirect('/admin/Carousel')->with('message','Deleted Successfully');
    }
}
