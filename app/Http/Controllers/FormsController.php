<?php

namespace App\Http\Controllers;

use App\Models\Forms;
use Illuminate\Http\Request;

class FormsController extends Controller
{
    public function index(){
        $form_builders = Forms::all();
        return view('clients.forms.create',compact('form_builders'));
    }

    public function store(Request $request){
        if ($request->isMethod('post')) {
            $request->validate([
                'field_type' => 'required',
                'label_name' => 'required',
                'placeholder',
            ]);
    
        
            Forms::insert([
                'field_type' => $request->field_type,
                'label_name' => $request->label_name,
                'placeholder' => $request->placeholder,
            ]);
            return redirect('/forms')->with('flash_message_success', 'New input add with success!');
         }
    
         return view('clients.forms.create');
    }
}
