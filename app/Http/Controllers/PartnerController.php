<?php

namespace App\Http\Controllers;

use App\Models\Partners;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    public function index(){
        $partners = Partners::all();
        return view('partners.index', compact('partners'));
    }

    public function store(Request $request){
        if ($request->isMethod('post')) {
            $request->validate([
                'name',
                'email',
                'phone',
                'logo',
                'town',
                'partner_type'
            ]);
    
        
            Partners::insert([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'logo' => $request->logo,
                'town' => $request->town,
                'partner_type' => $request->partner_type,
            ]);

            return redirect('/partners')->with('flash_message_success', 'New partner add with success!');
         }
    
         return view('partners.index');     
        }
    
}
