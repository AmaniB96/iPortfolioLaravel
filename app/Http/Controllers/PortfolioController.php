<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    public function index() {
        $portfolio = Portfolio::all();
        return view('backHome',compact('portfolio'));
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

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Portfolio $portfolio)
    {
        // This will find the portfolio item by its ID automatically
        // and pass it to the edit view.
        return view('partials.portfolio.back.edit', compact('portfolio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        $portfolio->filter = $request->filter;

        if ($request->hasFile('img')) {
            // Delete old image if it exists
            if ($portfolio->img) {
                $oldPath = str_replace('storage/', 'public/', $portfolio->img);
                Storage::delete($oldPath);
            }

            // Store new image
            $file = $request->file('img');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('portfolio-assets', $filename, 'public');
            $portfolio->img = 'storage/' . $path;
        }

        $portfolio->save();

        return redirect()->route('backHome.index')->with('success', 'Portfolio item updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Portfolio $portfolio)
    {
        // Delete the image file from storage
        if ($portfolio->img) {
            $path = str_replace('storage/', 'public/', $portfolio->img);
            Storage::delete($path);
        }

        $portfolio->delete();

        return redirect()->route('backHome.index')->with('success', 'Portfolio item deleted!');
    }
}
