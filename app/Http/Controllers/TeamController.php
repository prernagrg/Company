<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\File;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams = Team::query()->paginate(5);
        return view('Company.admin.team.index',compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $files = File::query()->paginate(8);
        return view('Company.admin.team.create', compact('files'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request);
        $team = new Team;
        $request->validate([
            'img'=>'required|max:150',
            'name'=>'required|max:150|string',
            'position'=>'required|max:150|string',
        ]);
        $team->img = $request->img;
        $team->name = $request->name;
        $team->position = $request->position;
        $team->save();
        return redirect('/admin/Team')->with('message','Added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $files = File::query()->paginate(8);
        $team = Team::query()->where('id',$id)->get()->first();
        return view('Company.admin.team.view', compact('team','files'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $files = File::query()->paginate(8);
        $team = Team::query()->where('id',$id)->get()->first();
        return view('Company.admin.team.edit', compact('team','files'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $team = new Team;
        $team = $team->where('id',$id)->get()->first();
        $request->validate([
            'img'=>'required|max:150',
            'name'=>'required|max:150|string',
            'position'=>'required|max:150|string',
        ]);
        $team->img = $request->img;
        $team->name = $request->name;
        $team->position = $request->position;
        $team->update();
        return redirect('/admin/Team')->with('message','Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
      $team = Team::query()->where('id',$id)->get()->first();
      $team->delete();
      return redirect('/admin/Team')->with('message','Deleted Successfully');
    }
}
