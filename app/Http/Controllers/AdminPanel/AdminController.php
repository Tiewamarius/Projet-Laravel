<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Horaires;
class AdminController extends Controller
{
    public function index()
    {
        $user=User::all();
        $horaire=Horaires::all();
        
        return view('admin.dashboard ', compact('user','horaire'));
    }

    public function presence(Request $request)
    {
        $Begin = request()->begin;
        $End= request()->end;

        $horaire = Horaires::whereDate('created_at','>=',$Begin)->whereDate('created_at','<=',$End)->get();
        
        return view('admin.dashboard ', compact('horaire'));
    }


    public function details($id,$data)
    {  
        
        }
}
