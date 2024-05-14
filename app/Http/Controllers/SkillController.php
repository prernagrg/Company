<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $skills = Skill::query()->paginate(5);
        return view('Company.admin.skills.index', compact('skills'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Company.admin.skills.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $skill = new Skill;
        $request->validate([
            'language'=>'required|max:150|string',
            'percent'=>'required|max:100|string'
        ]);
        $skill->language = $request->language;
        $skill->percent = $request->percent;
        $skill->save();
        return redirect('/admin/Skills')->with('message','Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $skill = Skill::query()->where('id',$id)->get()->first();
        return view('Company.admin.skills.view', compact('skill'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $skill = Skill::query()->where('id',$id)->get()->first();
        return view('Company.admin.skills.edit', compact('skill'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $skill = new Skill;
        $skill = $skill->where('id',$id)->get()->first();
        $request->validate([
            'language'=>'required|max:150|string',
            'percent'=>'required|max:100|string'
        ]);
        $skill->language = $request->language;
        $skill->percent = $request->percent;
        $skill->update();
        return redirect('/admin/Skills')->with('message','Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $skill = Skill::query()->where('id',$id)->get()->first();
        $skill->delete();
        return redirect('/admin/Skills')->with('message','Deleted Successfully');
    }
}
