<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use App\Models\Forms;
use App\Models\Insurances;
use App\Models\Partners;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule as ValidationRule;

class ClientController extends Controller
{
    public function index(){
        $form_builders = Forms::all();
        $partners = Partners::all();
        $insurances = Insurances::all();
        $clients = Clients::all();
        return view('clients.index', compact('form_builders','partners','insurances','clients'));
    }

    public function store(Request $request){
        if($request->isMethod('post')){

            $form_builders = Forms::pluck('label_name')->toArray();

            $validatedData = $request->all();
        
            foreach($form_builders as $builder) {
                $validatedData[$builder] = 'nullable';
            }
        
          //  $validatedData = $request->$validatedData;
        
            $data = array_merge(
                $validatedData,
                ['label_name' => implode(',', $form_builders)]
            );
        
            Clients::create($data);

             return redirect()->with('flash_message_success', 'New client add with success!');
             
        }
    }
}
