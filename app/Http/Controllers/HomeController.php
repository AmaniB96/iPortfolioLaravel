<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\Message;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Skill;
use App\Models\Testimonial;
use Illuminate\Http\Request;
class HomeController
{
    public function index(){
        $about = About::all()->first();
        $skills = Skill::all();
        $portfolio = Portfolio::all();
        $services = Service::all();
        $testimonials = Testimonial::all();
        $contact = Contact::all();
        return view('home', compact('about','skills', 'portfolio','services','testimonials', 'contact'));
    }

    public function store(Request $request) {
        $message = new Message();
        $message->nom = $request->nom;
        $message->email = $request->email;
        $message->sujet = $request->sujet;
        $message->message = $request->message;
        $message->save();

        return redirect()->route('home', ['#contact'])->with('succes', 'Message envoyé!');
    }
}
