<?php

namespace App\Http\Controllers;

use App\Models\Fact;
use Illuminate\Http\Request;

class FactController extends Controller
{
    public function index(){

        $page = "Facts";
        $facts = Fact::all();

        return view('backoffice.fact.all', compact('page', 'facts'));
    }

    public function destroy($id){

        $fact = Fact::find($id);
        $fact->delete();

        return redirect()->back();
    }

    public function edit($id){

        $fact = Fact::find($id);
        $page = "Edit fact";

        return view('backoffice.fact.edit', compact('fact', 'page'));
    }

    public function update($id, Request $request){

        $fact = Fact::find($id);
        
        $fact->icone = $request->icone;
        $fact->number = $request->number;
        $fact->description = $request->description;
        $fact->updated_at = now();
        $fact->save();

        return redirect()->route('facts');

    }

    public function create(){

        $page = 'Create Fact';

        return view('backoffice.fact.create', compact('page'));
    }

    public function store(Request $request){

        $fact = new Fact();
        
        $fact->icone = $request->icone;
        $fact->number = $request->number;
        $fact->description = $request->description;
        $fact->created_at = now();

        $fact->save();

        return redirect()->route('facts');

    }
}
