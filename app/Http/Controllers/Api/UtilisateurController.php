<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Utilisateur;
use App\Models\RoleUtilisateur;
use App\Http\Controllers\Api\RoleUtilisateurController;

class UtilisateurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Utilisateur::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "nom"=>"required",
            "prenom"=>"required",
            "email"=>"required",
            "password"=>"required",
            "id_Role_Utilisateur"=>"required"
        ]);
        $roleutilisateur = RoleUtilisateur::where("id_Role_Utilisateur", $request->id_Role_Utilisateur)->first();
        $utilisateur = new Utilisateur();
        if($roleutilisateur)
        {

            $utilisateur->id_Role_Utilisateur = $request->id_Role_Utilisateur;
            $utilisateur->nom = $request->nom;
            $utilisateur->prenom = $request->prenom;
            $utilisateur->email = $request->email;
            $utilisateur->password = $request->password;
            $utilisateur->save();
            return response()->json([
                "statut"=>1,
                "message"=>"Utilisateur enregistré"
            ], 200);
        }
        else
        {

        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $utilisateur = Utilisateur::where("id_Utilisateur", $id)->get();
        if($utilisateur)
        {
                return response()->json([
                    "statut"=>1,
                    "Utilisateur"=>$utilisateur
                ], 200);

        }

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $roleutilisateur = RoleUtilisateur::where("id_Role_Utilisateur", $request->id_Role_Utilisateur)->first();
        $utilisateur = new Utilisateur();
        if($roleutilisateur)
        {

            $utilisateur->id_Role_Utilisateur = $request->id_Role_Utilisateur;
            $utilisateur->nom = $request->nom;
            $utilisateur->prenom = $request->prenom;
            $utilisateur->email = $request->email;
            $utilisateur->password = $request->password;
            $utilisateur->save();
            return response()->json([
                "statut"=>1,
                "message"=>"Utilisateur enregistré"
            ], 200);
        }
        else
        {

        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
