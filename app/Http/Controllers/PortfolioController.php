<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $portfolios = Portfolio::query()->paginate(5);
        return view('Company.admin.portfolio.index', compact('portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $files = File::query()->paginate(5);
        return view('Company.admin.portfolio.create',compact('files'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $portfolio = new Portfolio;
        $request->validate([
            'app1'=>'required|max:150',
            'app2'=>'required|max:150',
            'app3'=>'required|max:150',
            'card1'=>'required|max:150',
            'card2'=>'required|max:150',
            'card3'=>'required|max:150',
            'web1'=>'required|max:150',
            'web2'=>'required|max:150',
            'web3'=>'required|max:150',
            
        ]);
        $portfolio->app1 = $request->app1;
        $portfolio->app2 = $request->app2;
        $portfolio->app3 = $request->app3;
        $portfolio->card1 = $request->card1;
        $portfolio->card2 = $request->card2;
        $portfolio->card3 = $request->card3;
        $portfolio->web1 = $request->web1;
        $portfolio->web2 = $request->web2;
        $portfolio->web3 = $request->web3;
        $portfolio->save();
        return redirect('/admin/Portfolio')->with('message','Added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Portfolio $portfolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Portfolio $portfolio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Portfolio $portfolio)
    {
        //
    }
}
