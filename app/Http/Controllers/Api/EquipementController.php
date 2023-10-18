<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Equipement;

class EquipementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Equipement::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "nom_Equipement"=>"required",
            "descriptionEquipement"=>"required",
            "localisationEquipement"=>"required"

        ]);
        $equipement = new Equipement();
        $equipement->nom_Equipement = $request->nom_Equipement;
        $equipement->descriptionEquipement = $request->descriptionEquipement;
        $equipement->localisationEquipement = $request->localisationEquipement;
        $equipement->save();
        return response()->json([
            "statut"=>1,
            "message"=>"Equipement enregistré"
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $equipement = Equipement::where("id",$id)->exits();
        if($equipement)
        {
            $info = Equipement::find($id);
            return response()->json([
                "statu"=>1,
                "message"=>"Equipement trouvée",
                "data"=> $info
            ],200,);
        }
        else
        {
            return response()->json([
                "statu"=>0,
                "message"=>"Equipement introuvable",
            ],404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $equipement = Equipement::where("id",$id)->exits();
        if($equipement)
        {
            $info = Equipement::find($id);
            $info->nom_Equipement = $request->nom_Equipement;
            $info->descriptionEquipement = $request->descriptionEquipement;
            $info->localisationEquipement = $request->localisationEquipement;
            $info->save();
            return response()->json([
                "statu"=>1,
                "message"=>"Mise à jour reussi",
                "data"=> $info
            ],200,);
        }
        else
        {
            return response()->json([
                "statu"=>0,
                "message"=>"Equipement introuvable",
            ],404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $equipement = Equipement::where("id",$id)->exits();
        if($equipement)
        {
            $info = Equipement::find($id);
            $info->delete();
            return response()->json([
                "statu"=>1,
                "message"=>"Suppression réussi",
                "data"=> $info
            ],200,);
        }
        else
        {
            return response()->json([
                "statu"=>0,
                "message"=>"Equipement introuvable",
            ],404);
        }
    }
}
