<?php

namespace App\Http\Controllers;

use App\Models\Pricing;
use Illuminate\Http\Request;

class PricingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pricings = Pricing::query()->paginate(5);
        return view('Company.admin.pricing.index',compact('pricings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Company.admin.pricing.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $pricing = new Pricing;
        $request->validate([
            'course'=>'required|max:150|string',
            'price'=>'required|max:150|string',
            'course1'=>'required|max:150|string',
            'course2'=>'required|max:150|string',
            'course3'=>'required|max:150|string',
            'course4'=>'required|max:150|string',
            'course5'=>'required|max:150|string',
            'optional'=>'required|max:150|string',
        ]);
        $pricing->course = $request->course;
        $pricing->price = $request->price;
        $pricing->course1 = $request->course1;
        $pricing->course2 = $request->course2;
        $pricing->course3 = $request->course3;
        $pricing->course4 = $request->course4;
        $pricing->course5 = $request->course5;
        $pricing->optional = $request->optional;
        $pricing->save();
        return redirect('/admin/Pricing')->with('message','Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $pricing = Pricing::query()->where('id',$id)->get()->first();
        return view('Company.admin.pricing.view',compact('pricing'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pricing = Pricing::query()->where('id',$id)->get()->first();
        return view('Company.admin.pricing.edit',compact('pricing'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $pricing = new Pricing;
        $pricing = $pricing->where('id',$id)->get()->first();
        $request->validate([
            'course'=>'required|max:150|string',
            'price'=>'required|max:150|string',
            'course1'=>'required|max:150|string',
            'course2'=>'required|max:150|string',
            'course3'=>'required|max:150|string',
            'course4'=>'required|max:150|string',
            'course5'=>'required|max:150|string',
            'optional'=>'required|max:150|string',
        ]);
        $pricing->course = $request->course;
        $pricing->price = $request->price;
        $pricing->course1 = $request->course1;
        $pricing->course2 = $request->course2;
        $pricing->course3 = $request->course3;
        $pricing->course4 = $request->course4;
        $pricing->course5 = $request->course5;
        $pricing->optional = $request->optional;
        $pricing->update();
        return redirect('/admin/Pricing')->with('message','Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pricing = Pricing::query()->where('id',$id)->get()->first();
        $pricing->delete();
        return redirect('/admin/Pricing')->with('message','Deleted Successfully');
    }
}
