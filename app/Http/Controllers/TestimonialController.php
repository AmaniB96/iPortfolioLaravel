<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    public function store(Request $request)
    {
        $testimonial = new Testimonial();
        $testimonial->nom = $request->nom;
        $testimonial->text = $request->text;

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('public/testimonials');
            $testimonial->image = Storage::url($path);
        }
        $testimonial->save();
        return redirect()->route('backHome.index')->with('success', 'Testimonial added!');
    }

    public function edit(Testimonial $testimonial)
    {
        return view('partials.testimonials.back.edit', compact('testimonial'));
    }

    public function update(Request $request, Testimonial $testimonial)
    {
        $testimonial->nom = $request->nom;
        $testimonial->text = $request->text;

        if ($request->hasFile('image')) {
            if ($testimonial->image) {
                Storage::delete(str_replace('/storage', 'public', $testimonial->image));
            }
            $path = $request->file('image')->store('public/testimonials');
            $testimonial->image = Storage::url($path);
        }
        $testimonial->save();
        return redirect()->route('backHome.index')->with('success', 'Testimonial updated!');
    }

    public function destroy(Testimonial $testimonial)
    {
        if ($testimonial->image) {
            Storage::delete(str_replace('/storage', 'public', $testimonial->image));
        }
        $testimonial->delete();
        return redirect()->route('backHome.index')->with('success', 'Testimonial deleted!');
    }
}
