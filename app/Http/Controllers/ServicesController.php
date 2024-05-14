<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Services::query()->paginate(5);
        return view('Company.admin.services.index' , compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Company.admin.services.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request);
        $services= new Services;
        $request->validate([
            'logo'=>'required|max:150',
            'title'=>'required|max:150|string',
            'description'=>'required'
        ]);
        $services->logo = $request->logo;
        $services->title = $request->title;
        $services->description = $request->description;
        $services->save();
        return redirect('/admin/Services')->with('message', ' Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $services = Services::query()->where('id',$id)->get()->first();
        return view('Company.admin.services.view', compact('services'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $services = Services::query()->where('id',$id)->get()->first();
        return view('Company.admin.services.edit', compact('services'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $services= new Services;
        $services = $services->where('id',$id)->get()->first();
        $request->validate([
            'logo'=>'required|max:150',
            'title'=>'required|max:150|string',
            'description'=>'required'
        ]);
        $services->logo = $request->logo;
        $services->title = $request->title;
        $services->description = $request->description;
        $services->update();
        return redirect('/admin/Services')->with('message', ' Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Services $services, $id)
    {
        $services = Services::query()->where('id',$id)->get()->first();
        $services->delete();
        return redirect('/admin/services')->with('message', 'Deleted successfully');
    }
}
