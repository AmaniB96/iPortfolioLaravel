<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Portfolio;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class BackHomeController extends Controller
{
    public function index()
    {
        $about = About::with('avatar')->first();
        $portfolio = Portfolio::all();
        $skills = Skill::all();

        return view('backHome', compact('about', 'portfolio', 'skills'));
    }
}
