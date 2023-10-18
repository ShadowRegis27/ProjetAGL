<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Incident;

class IncidentController extends Controller
{
    public function index()
    {
        return Incident::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // API Fonction d'ajout d'un incident
        $request->validate([
            "description_Incident"=>"required",
        ]);
        $incident = new Incident();
        $incident->description_Incident = $request->description_Incident;
        $incident->save();
        return response()->json([
            "statut"=>1,
            "message"=>"Incident enregistré"
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // API Recuperer et afficher une instance de l'incident
        $incident = Incident::where("id_Incident",$id)->get();

        if($incident){
            return response()->json([
                "statu"=>1,
                "message"=>"Incident trouvée",
                "data"=> $incident
            ],200,);
        }

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // API Fonction de modification d'un incident
        $incident = Incident::where("id_Incident",$id)->get();
        if($incident){
            $incident->descriptionIncident = $request->descriptionIncident;
            $incident->dateIncident = $request->dateIncident;
            $incident->save();
            return response()->json([
                "statut"=>1,
                "message"=>"Incident modifié",
                "data"=> $incident
            ], 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // API Fonction de suppression d'un incident
        $incident = Incident::where("id_Incident",$id)->get();
        if($incident){
            $incident->delete();
            return response()->json([
                "statut"=>1,
                "message"=>"Incident supprimé",
                "data"=> $incident
            ], 200);
        }
    }
}
