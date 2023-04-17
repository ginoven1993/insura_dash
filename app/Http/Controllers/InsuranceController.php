<?php

namespace App\Http\Controllers;

use App\Models\Insurances;
use Illuminate\Http\Request;

class InsuranceController extends Controller
{
    public function index(){
        $insurances = Insurances::all();
        return view('insurance.index',compact('insurances'));
    }

    public function store(Request $request){
        if ($request->isMethod('post')) {
        $request->validate([
            'categorie' => 'required',
            'description' => 'required',
        ]);

    
        Insurances::insert([
            'categorie' => $request->categorie,
            'description' => $request->description,
        ]);
        return redirect('/insurances')->with('flash_message_success', 'New insurance add with success!');
     }

     return view('insurance.index');     
    }
}
