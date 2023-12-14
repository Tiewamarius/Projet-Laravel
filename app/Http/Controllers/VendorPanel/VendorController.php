<?php

namespace App\Http\Controllers\VendorPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Horaires;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class VendorController extends Controller
{
    public function index()
    {
        $user=User::all();
        $horaire=Horaires::all();
        return view('vendor.dashboard', compact('horaire'));
        
    }

    public function create(Request $request)
    {  $horaires=new Horaires;

        $horaires->idUser=$request->idUser;
        $horaires->nameUser=$request->nameUser;
        $horaires->fonctionUser=$request->fonctionUser;
        $horaires->phoneUser=$request->phoneUser;
        $horaires->debut=$request->debut;
        $horaires->fin=$request->fin;
        $horaires->observation=$request->observation; 
    
        $horaires->save();
        Auth::logout();
        return redirect()->route('login')->with('message', 'Excellente Journee avous');
        }


        public function Add($id)
        {
            $horaire=Horaires::all();
            return view('vendor.add.$id', compact('horaire'));
        } 

    
    

     
}
