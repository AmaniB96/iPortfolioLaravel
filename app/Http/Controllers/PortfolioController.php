<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController
{
    public function index() {
        $portfolio = Portfolio::all();
        return view('backHome',compact('portfolio'));
    }

    public function create() {
        $portfolio = Portfolio::all();
        return view('backHome', compact('portfolio'));
    }

    public function store(Request $request) {
        $portfolio = new Portfolio();
        $portfolio->filter = $request->filter;

        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('portfolio-assets', $filename, 'public');
            $portfolio->img = 'storage/'. $path;
        }

        $portfolio->save();

        return redirect()->route('backHome.index')->with('success', 'Portfolio ajouté !');
    }
}
