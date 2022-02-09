<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use Illuminate\Http\Request;

class ClasseController extends Controller
{
    public function index()
    {
        $classes = Classe::all();
        return view('classes.classeList', [
            'classes'=>$classes
        ]);
    }
    public function create()
    {
        return view('classes.classeAdd');
    }

    public function store(Request $request)
    {

        $classe = Classe::create([
            'libelleClasse'=> $request->libelleClasse,
        ]);

        return back();
    }

    public function edit(Classe $classe)
    {
        return view('classes.classeEdit', [
            'classe'=>$classe
        ]);
    }

    public function update(Classe $classe)
    {
        $data_classe = request()->validate([
            'libelleClasse'=> ['required'] ,
        ]); $classe->update($data_classe);

        return redirect ('/classeList');
    }
    public function destroy(Classe $classe)
    {
        $classe->delete();
        return redirect('classeList');
    }
}
