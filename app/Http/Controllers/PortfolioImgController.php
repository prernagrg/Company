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
        $files = File::query()->paginate(8);
        return view('Company.admin.portfolioimg.index',compact('portfolio_imgs','files'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $files = File::query()->paginate(8);
        return view('Company.admin.portfolioimg.create',compact('files'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $portfolio_img = new Portfolio_img;
        $request->validate([
            'img'=>'required|max:150'
        ]);
        $portfolio_img->img = $request->img;
        $portfolio_img->save();
        return redirect('/admin/Portfolio_img')->with('message','Image Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $files = File::query()->paginate(8);
        $portfolio_img = Portfolio_img::query()->where('id',$id)->get()->first();
        return view('Company.admin.portfolioimg.view',compact('files','portfolio_img'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $files = File::query()->paginate(8);
        $portfolio_img = Portfolio_img::query()->where('id',$id)->get()->first();
        return view('Company.admin.portfolioimg.edit',compact('files','portfolio_img'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $portfolio_img = new Portfolio_img;
        $portfolio_img = $portfolio_img->where('id',$id)->get()->first();
        $request->validate([
            'img'=>'required|max:150'
        ]);
        $portfolio_img->img = $request->img;
        $portfolio_img->update();
        return redirect('/admin/Portfolio_img')->with('message','Image updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $portfolio_img = Portfolio_img::query()->where('id',$id)->get()->first();
       $portfolio_img->delete();
       return redirect('/admin/Portfolio_img')->with('message','Deleted Successfully'); 
    }
}
