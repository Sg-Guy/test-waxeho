<?php

namespace App\Http\Controllers;

use App\Models\Emprunt;
use Illuminate\Http\Request;

class EmpruntController extends Controller
{
    public function index()
    {
        $emprunts = Emprunt::all();

        return response()->json([
            "data" => $emprunts,
        ], 200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            "membre_id" => ["required", "integer", "exists:membres,id"],
            "livre_id" => ["required", "integer", "exists:livres,id"],
            "date_emprunt" => ["required", "date"],
            "date_retour" => ["required", "date", "after:date_emprunt"],
        ]);

        if ($validated['membre_id']) {
        }
        $emprunts = Emprunt::where("membre_id", $validated['membre_id'])
            ->where("status", 'en_cours')
            ->count();

        if ($emprunts === 3) {
            return response()->json([
                "message" => "Emprunt impossible. Des emprunts en cours",
            ]);
        }

        $livre = Emprunt::create($validated);

        return response()->json([
            "message" => "emprunt créé avec succès",
            "data" => $livre,
        ], 201);
    }
}
