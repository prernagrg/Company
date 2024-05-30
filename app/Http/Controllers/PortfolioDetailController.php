<?php

namespace App\Http\Controllers;

use App\Models\Portfolio_detail;
use Illuminate\Http\Request;

class PortfolioDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $portfolio_details = Portfolio_detail::query()->paginate(5);
        return view('Company.admin.portfoliodetails.index', compact('portfolio_details'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Company.admin.portfoliodetails.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $portfolio_detail = new Portfolio_detail;
        $request->validate([
            'category'=>'required|max:150|string',
            'client'=>'required|max:150|string',
            'date'=>'required|max:150|string',
            'project_url'=>'required|max:150|string',
            'details'=>'required'
        ]);
        $portfolio_detail->category = $request->category;
        $portfolio_detail->client = $request->client;
        $portfolio_detail->date = $request->date;
        $portfolio_detail->project_url = $request->project_url;
        $portfolio_detail->details = $request->details;
        $portfolio_detail->save();
        return redirect('/admin/Portfolio_details')->with('message','Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $portfolio_detail = Portfolio_detail::query()->where('id',$id)->get()->first();
        return view('Company.admin.portfoliodetails.view',compact('portfolio_detail'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $portfolio_detail = Portfolio_detail::query()->where('id',$id)->get()->first();
        return view('Company.admin.portfoliodetails.edit',compact('portfolio_detail'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $portfolio_detail = new Portfolio_detail;
        $portfolio_detail = $portfolio_detail->where('id',$id)->get()->first();
        $request->validate([
            'category'=>'required|max:150|string',
            'client'=>'required|max:150|string',
            'date'=>'required|max:150|string',
            'project_url'=>'required|max:150|string',
            'details'=>'required'
        ]);
        $portfolio_detail->category = $request->category;
        $portfolio_detail->client = $request->client;
        $portfolio_detail->date = $request->date;
        $portfolio_detail->project_url = $request->project_url;
        $portfolio_detail->details = $request->details;
        $portfolio_detail->update();
        return redirect('/admin/Portfolio_details')->with('message','updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $portfolio_detail = Portfolio_detail::query()->where('id',$id)->get()->first();
        $portfolio_detail->delete();
        return redirect('/admin/Portfolio_details')->with('message','Deleted Successfully');
    }
}
