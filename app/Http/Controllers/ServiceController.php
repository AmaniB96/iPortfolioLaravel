<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $service = new Service();
        $service->service = $request->service;
        $service->save();

        return redirect()->route('backHome.index')->with('success', 'Service added!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        return view('partials.services.back.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        $service->service = $request->service;
        $service->save();

        return redirect()->route('backHome.index')->with('success', 'Service updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('backHome.index')->with('success', 'Service deleted!');
    }
}
