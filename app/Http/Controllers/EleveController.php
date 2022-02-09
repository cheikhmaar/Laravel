<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Eleve;
use Illuminate\Http\Request;

class EleveController extends Controller
{
    public function index()
    {
        $eleves = Eleve::all();
        $classes = Classe::all();
        return view('eleves.eleveList', [
            'eleves'=>$eleves,
            'classes'=>$classes
        ]);
    }
    public function create()
    {
        $classes = Classe::all();
        return view('eleves.eleveAdd', [
            'classes'=>$classes
        ]);
    }

    public function store(Request $request)
    {

        $eleve = Eleve::create([
            'nom'=> $request->nom,
            'prenom'=> $request->prenom,
            'classe_id'=> $request->classe_id,

        ]);

        return back();
    }

    public function edit(Eleve $eleve)
    {
        $classes = Classe::all();
        return view('eleves.eleveEdit', [
            'eleve'=>$eleve,
            'classes'=>$classes

        ]);
    }

    public function update(ELeve $eleve)
    {
        $data_eleve = request()->validate([
            'nom'=> ['required'] ,
            'prenom'=> ['required'] ,
            'classe_id'=> ['required'] ,
        ]); $eleve->update($data_eleve);


        return redirect ('/eleveList');
    }

    public function destroy(Eleve $eleve)
    {
        $eleve->delete();
        return redirect('eleveList');
    }

}
