<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index(){

        $page = "Services";
        $services = Service::all();

        return view('backoffice.service.all', compact('page', 'services'));
    }

    public function destroy($id){

        $service = Service::find($id);
        $service->delete();

        return redirect()->back();
    }

    public function edit($id){

        $service = Service::find($id);
        $page = "Edit service";

        return view('backoffice.service.edit', compact('service', 'page'));
    }

    public function update($id, Request $request){

        $service = Service::find($id);
        
        $service->icone = $request->icone;
        $service->title = $request->title;
        $service->description = $request->description;
        $service->created_at = now();

        $service->save();

        return redirect()->route('services');

    }

    public function create(){

        $page = 'Create Service';

        return view('backoffice.service.create', compact('page'));
    }

    public function store(Request $request){

        $service = new Service();
        
        $service->icone = $request->icone;
        $service->title = $request->title;
        $service->description = $request->description;
        $service->created_at = now();

        $service->save();

        return redirect()->route('services');

    }
}
