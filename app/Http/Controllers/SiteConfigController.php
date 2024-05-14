<?php

namespace App\Http\Controllers;

use App\Models\Site_config;
use Illuminate\Http\Request;

class SiteConfigController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $site_configs  = Site_config::query()->paginate(5);
       return view('Company.admin.settings.index',compact('site_configs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Company.admin.settings.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       //dd($request);
       $site_config = new Site_config;
       $request->validate([
        'site_key'=>'required|max:150|string',
        'site_value'=>'required'
       ]);
       $site_config->site_key = $request->site_key;
       $site_config->site_value = $request->site_value;
       $site_config->save();
       return redirect('/admin/Settings')->with('message','Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $site_config = Site_config::query()->where('id',$id)->get()->first();
        return view('Company.admin.settings.view', compact('site_config'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $site_config = Site_config::query()->where('id',$id)->get()->first();
        return view('Company.admin.settings.edit', compact('site_config'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $site_config = new Site_config;
        $site_config = $site_config->where('id',$id)->get()->first();
        $request->validate([
         'site_key'=>'required|max:150|string',
         'site_value'=>'required'
        ]);
        $site_config->site_key = $request->site_key;
        $site_config->site_value = $request->site_value;
        $site_config->update();
        return redirect('/admin/Settings')->with('message','Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $site_config = Site_config::query()->where('id',$id)->get()->first();
        $site_config->delete();
        return redirect('/admin/Settings')->with('message','Deleted Successfully');
    }
}
