<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController
{

    public function store(Request $request)
    {
        $skill = new Skill();
        $skill->skill = $request->skill;
        $skill->pourcentage = $request->pourcentage;
        $skill->save();

        return redirect()->route('backHome.index')->with('success', 'Skill ajouté !');
    }
}
