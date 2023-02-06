<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    
    
    public function create()
    {
        $matiere = ['Laravel','Linux','Oracle','Java','C#'];
        $semestre = ['1e semestre','2e semestre','3e semestre','4e semestre'];
        return view('ajouter')->with('matiere',$matiere)->with('semestre',$semestre);
    }
    public function store(Request $request)//creation d'un objet de type Request (injection de dependance)
    {   
        $input = $request->all();
        Etudiant::create($input);
        return redirect('etudiant')->with('flash_message','Etudiant créé');
    }
    public function index()
    {
        $etudiants = Etudiant::all();
        return view('classe', ['etudiants' => $etudiants]);
        
    }
    public function show($id){

        $etudiant = Etudiant::find($id);
        return view('etudiant.show', compact('etudiant'));
    }

    
}

