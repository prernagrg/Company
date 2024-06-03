<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\File;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::query()->paginate(5);
        return view('Company.admin.clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $files = File::query()->paginate(8);
        return view('Company.admin.clients.create',compact('files'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $client = new Client;
        $request->validate([
            'img'=> 'required|max:150'
        ]);
        $client->img = $request->img;
        $client->save();
        return redirect('/admin/Client')->with('message','Added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $files = File::query()->paginate(8);
        $client = Client::query()->where('id',$id)->get()->first();
        return view('Company.admin.clients.view', compact('files','client'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $files = File::query()->paginate(8);
        $client = Client::query()->where('id',$id)->get()->first();
        return view('Company.admin.clients.edit', compact('files','client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $client = new Client;
        $client = $client->where('id',$id)->get()->first();
        $request->validate([
            'img'=> 'required|max:150'
        ]);
        $client->img = $request->img;
        $client->update();
        return redirect('/admin/Client')->with('message','Added successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $client = Client::query()->where('id',$id)->get()->first();
        $client->delete();
        return redirect('/admin/Client')->with('message','Deleted Successfully');
    }
}
