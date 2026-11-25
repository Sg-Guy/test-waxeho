<?php

namespace App\Http\Controllers;

use App\Models\Membre;
use Illuminate\Http\Request;

class MembreController extends Controller
{
    public function index()
    {
        $membres = Membre::all();

        return response()->json([
            "data" => $membres,
        ], 200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            "nom" => ["required", "string", "max:255"],
            "email" => ["required", "email"],
        ]);

        $membre = Membre::create($validated);

        return response()->json([
            "message"=>"membre créé avec succès",
            "data" => $membre,
        ], 201);
    }

    public function show(Membre $membre)
    {
        return response()->json([
            "message"=>"Détails récupérés",
            "data" => $membre,
        ], 200);
    }
    public function destroy(Membre $membre)
    {
        $membre->delete();
        return response()->json([
            "message"=>"Suppression éffectuée",
            "data" => $membre,
        ], 204);
    }
}
