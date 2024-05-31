<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $faqs = Faq::query()->paginate(5);
        return view('Company.admin.Faqs.index',compact('faqs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Company.admin.Faqs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $faq = new Faq;
        $request->validate([
        'question'=>'required',
        'answer'=>'required',
        ]);
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->save();
        return redirect('/admin/Faqs')->with('message','Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $faq = Faq::query()->where('id',$id)->get()->first();
        return view('Company.admin.Faqs.view',compact('faq'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $faq = Faq::query()->where('id',$id)->get()->first();
        return view('Company.admin.Faqs.edit',compact('faq'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $faq = new Faq;
        $faq = $faq->where('id',$id)->get()->first();
        $request->validate([
        'question'=>'required',
        'answer'=>'required',
        ]);
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->update();
        return redirect('/admin/Faqs')->with('message','Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $faq = Faq::query()->where('id',$id)->get()->first();
        $faq->delete();
        return redirect('/admin/Faqs')->with('message','deleted Successfully');
    }
}
