<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;

class EtudiantController extends Controller
{
    public function liste_etudiant(){
        $etudiants=Etudiant::all();
        return view('etudiant.liste',compact('etudiants'));
    }
    public function ajouter_etudiant(){
        return view('etudiant.ajouter');
    }
    public function ajouter_traitement(Request $request ){
        $request->validate([
            'nom'=> 'required',
            'prenom'=> 'required',
            'dtn'=> 'required',
        ]);
        $etudiant=new Etudiant();
        $nom=$request->nom;
        $prenom=$request->prenom;
        $dtn=$request->dtn;
        $etudiant->insererEtudiant($nom,$prenom,$dtn);
        return redirect('/ajouterEtudiant')->with('status','Ajouter Reussie');
    }
    public function updateEtudiant($nom){
        $etudiants=Etudiant::getEtudiantsParNom('Rakotomavo');
        return view('etudiant.update',compact('etudiants'));
    }
}
