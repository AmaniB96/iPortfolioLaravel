<?php

namespace App\Http\Controllers;
use App\Models\About;
use App\Models\Avatar;

use Illuminate\Http\Request;

class AboutController
{   public function index(){
    $about = About::first();
    $avatar= Avatar::all();
    return view('backHome', compact('about', 'avatar'));
}
    public function update(Request $request, $id) {
        $about = About::findOrFail($id);
        $avatar = Avatar::where('about_id', $id)->first();
        $about->subtitle = $request->subtitle;
        $about->birthdate = $request->birthdate;
        $about->website = $request->website;
        $about->phone = $request->phone;
        $about->city = $request->city;
        $about->age = $request->age;
        $about->degree = $request->degree;
        $about->email = $request->email;
        $about->freelance = $request->freelance;
        $about->src = $request->src;
        $about->subtext = $request->subtext;

        if ($request->hasFile('image')) {
        $file = $request->file('image');
        $filename = time() . '_' . $file->getClientOriginalName();
        $path = $request->file('image')->storeAs('avatars', $filename, 'public');
        $avatar->image = $path;
        $avatar->save();
    }
        $about->save();

        return redirect('backHome.index');
    }
}
