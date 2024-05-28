<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\File;
use Illuminate\Http\Request;

class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $files = File::query()->paginate(5);
        $cards = Card::query()->paginate(5);
        return view('Company.admin.card.index',compact('files','cards'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $files = File::query()->paginate(5);
        return view('Company.admin.card.create',compact('files'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $card = new Card;
        $request->validate([
            'img'=>'required|max:150',
            'title'=>'required|max:150|string',
            'sub_title'=>'required|max:150|string'
        ]);
        $card->img = $request->img;
        $card->title = $request->title;
        $card->sub_title = $request->sub_title;
        $card->save();
        return redirect('/admin/Card')->with('message','Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $files = File::query()->paginate(5);
        $card = Card::query()->where('id',$id)->get()->first();
        return view('Company.admin.card.view',compact('files','card'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $files = File::query()->paginate(5);
        $card = Card::query()->where('id',$id)->get()->first();
        return view('Company.admin.card.edit',compact('files','card'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $card = new Card;
        $card = $card->where('id',$id)->get()->first();
        $request->validate([
            'img'=>'required|max:150',
            'title'=>'required|max:150|string',
            'sub_title'=>'required|max:150|string'
        ]);
        $card->img = $request->img;
        $card->title = $request->title;
        $card->sub_title = $request->sub_title;
        $card->update();
        return redirect('/admin/Card')->with('message','Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $card = Card::query()->where('id',$id)->get()->first();
        $card->delete();
        return redirect('/admin/Card')->with('message','Deleted Successfully');
    }
}
