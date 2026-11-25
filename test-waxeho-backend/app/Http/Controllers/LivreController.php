<?php

namespace App\Http\Controllers;

use App\Models\Livre;
use Illuminate\Http\Request;

class LivreController extends Controller
{
    //
    public function index()
    {
        $lives = Livre::all();

        return response()->json([
            "data" => $lives,
        ], 200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            "titre" => ["required", "string", "max:255"],
            "auteur" => ["required" , "integer", "exists:membres,id"],
            "isbn" => ["required" , "string", "unique:livres,isbn"],
            "nbr_exemplaires" => ["nullable" , "integer"],
        ]);

        $livre = Livre::create($validated);

        return response()->json([
            "message"=>"Livre créé avec succès",
            "data" => $livre,
        ], 201);
    }

    public function show(Livre $livre)
    {
        return response()->json([
            "message"=>"Détails récupérés",
            "data" => $livre,
        ], 200);
    }
    public function destroy(Livre $livre)
    {
        $livre->delete();
        return response()->json([
            "message"=>"Suppression éffectuée",
            "data" => $livre,
        ], 204);
    }
}
