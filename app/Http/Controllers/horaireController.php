<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Horaires;
class horaireController extends Controller
{
    /**
     * Affiche la liste des présences.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Horaires = Horaires::all();

        return view('Horaires.index', compact('Horaires'));
    }

    

    /**
     * Enregistre une nouvelle présence.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
        return redirect()->back()->with('message', 'Vous avez été déconnecté.');
        
        }

    /**
     * Affiche le formulaire de modification d'une présence.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Horaire = Horaires::findOrFail($id);

        return view('Horaires.edit', compact('Horaire'));
    }

    /**
     * Met à jour une présence.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    { 

        $Horaire = Horaires::findOrFail($id);
        $Horaire->utilisateur_id = $request->input('utilisateur_id');
        $Horaire->date = $request->input('date');
        $Horaire->heure_arrivee = $request->input('heure_arrivee');
        $Horaire->heure_depart = $request->input('heure_depart');
        $Horaire->save();

        return redirect()->route('Horaires.index');
    }

    /**
     * Supprime une présence.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Horaire = Horaires::findOrFail($id);
        $Horaire->delete();

        return redirect()->route('Horaires.index');
    }
}
