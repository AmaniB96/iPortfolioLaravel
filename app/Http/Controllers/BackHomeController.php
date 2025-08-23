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

class BackHomeController extends Controller
{
    public function index()
    {
        $about = About::with('avatar')->first();
        $portfolio = Portfolio::all();
        $skills = Skill::all();
        $services = Service::all();
        $testimonials = Testimonial::all();
        $contact = Contact::first();
        $messages = Message::latest()->get(); // Get newest messages first

        return view('backHome', compact(
            'about',
            'portfolio',
            'skills',
            'services',
            'testimonials',
            'contact',
            'messages'
        ));
    }
}