<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index(){

        $page = "Skills";
        $skills = Skill::all();

        return view('backoffice.skill.all', compact('page', 'skills'));
    }

    public function destroy($id){

        $skill = Skill::find($id);
        $skill->delete();

        return redirect()->back();
    }

    public function edit($id){

        $skill = Skill::find($id);
        $page = "Edit skill";

        return view('backoffice.skill.edit', compact('skill', 'page'));
    }

    public function update($id, Request $request){

        $skill = Skill::find($id);
        
        $skill->language = $request->language;
        $skill->level = $request->level;
        
        $skill->created_at = now();

        $skill->save();

        return redirect()->route('skills');

    }

    public function create(){

        $page = 'Create Skill';

        return view('backoffice.skill.create', compact('page'));
    }

    public function store(Request $request){

        $skill = new Skill();
        
        $skill->language = $request->language;
        $skill->level = $request->level;
        
        $skill->created_at = now();

        $skill->save();

        return redirect()->route('skills');

    }
}
