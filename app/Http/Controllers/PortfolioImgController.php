<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\Portfolio_img;
use Illuminate\Http\Request;

class PortfolioImgController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $portfolio_imgs = Portfolio_img::query()->paginate(5);
        $files = File::query()->paginate(5);
        return view('Company.admin.portfolioimg.index',compact('portfolio_imgs','files'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Portfolio_img $portfolio_img)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Portfolio_img $portfolio_img)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Portfolio_img $portfolio_img)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Portfolio_img $portfolio_img)
    {
        //
    }
}
