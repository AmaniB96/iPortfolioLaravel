<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function store(Request $request)
    {
        $request->validate(['skill' => 'required|string', 'pourcentage' => 'required|integer|min:0|max:100']);
        $skill = new Skill();
        $skill->skill = $request->skill;
        $skill->pourcentage = $request->pourcentage;
        $skill->save();
        return redirect()->route('backHome.index')->with('success', 'Skill added!');
    }

    public function edit(Skill $skill)
    {
        return view('partials.skill.back.edit', compact('skill'));
    }

    public function update(Request $request, Skill $skill)
    {
        $request->validate(['skill' => 'required|string', 'pourcentage' => 'required|integer|min:0|max:100']);
        $skill->skill = $request->skill;
        $skill->pourcentage = $request->pourcentage;
        $skill->save();
        return redirect()->route('backHome.index')->with('success', 'Skill updated!');
    }

    public function destroy(Skill $skill)
    {
        $skill->delete();
        return redirect()->route('backHome.index')->with('success', 'Skill deleted!');
    }
}