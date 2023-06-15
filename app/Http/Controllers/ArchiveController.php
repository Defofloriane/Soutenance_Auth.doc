<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArchiveController extends Controller
{
    public function index(){
        return view('archive');
    }
    public function store(Request $request){

         // Vérifier si une image a été envoyée
    if ($request->hasFile('image')) {

        // Répertoire de destination des images
        $target_dir = "uploads/";

        // Nom du fichier image spécifié par l'utilisateur
        $filename = $request->input('file');

        // Renommer le fichier avec le nom spécifié par l'utilisateur
        $target_file = $target_dir . $filename . '.' . $request->file('image')->getClientOriginalExtension();

        // Déplacer l'image vers le dossier de destination
        if ($request->file('image')->move($target_dir, $target_file)) {
            // Envoyer le nom de fichier d'image à la vue
            return view('image', ['image' => $target_file]);
        } else {
            return redirect()->back()->with('error', 'Erreur : Impossible de télécharger l\'image.');
        }

    } else {
        return redirect()->back()->with('error', 'Erreur : Aucune image n\'a été envoyée.');
    }
    }
}
