<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Skill;
use Illuminate\Http\Request;
class HomeController
{
    public function index(){
        $about = About::all()->first();
        $skills = Skill::all();
        $portfolio = Portfolio::all();
        $services = Service::all();
        return view('home', compact('about','skills', 'portfolio','services'));
    }
}
