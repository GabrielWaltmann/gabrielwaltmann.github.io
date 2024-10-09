<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;

class SkillsController extends Controller {
    public function retrieves() {
        $skills = Skill::all();
        return response()->json($skills);
    }

    public function retrievesOne($id) {
        $skill = Skill::find($id);
        return response()->json($skill);
    }

    public function create() {
        $skill = Skill::create(request()->all());
        $skill-> save();
        return response()->json($skill);
    }

    public function update($id) {
        $skill = Skill::find($id);
        $skill->update(request()->all());
        return response()->json($skill);
    }

    public function delete($id) {
        $skill = Skill::find($id);
        $skill->delete();
        return response()->json($skill);
    }
}

