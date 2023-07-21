<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\EtudiantFiliereNiveau;
use App\Models\Filiere;
use App\Models\Niveau;
use App\Models\Releve;
use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx\Rels;

class EtudiantController extends Controller
{
    public function index(Request $request){
        $niv_id=$request->input('id_niveau');
        $fil_id=$request->input('filiere');
        $niveau=Niveau::where('id_niveau',$niv_id)->first();
        $filiere=Filiere::where('id_filiere',$fil_id)->first();
         $releves=Releve::where(['niveau'=>$niveau->nom_niveau, 'filiere'=>$filiere->nom_filiere])->get(); 
         $etudiants=Etudiant::all();
         return view('etudiant',compact('etudiants','niveau','releves','filiere'));
    }

    public function addStudent(Request $request){
       $nom=$request->input('nom');
       $prenom=$request->input('prenom');
       $matricule=$request->input('matricule');
       $date_naiss=$request->input('dateNaissance');
       $lieu_naiss=$request->input('lieuNaissance');
       $niveau=$request->input('niveau');
       $filiere=$request->input('filiere');
       $anneeAcademique=$request->input('anneeAcademique');

       $wordsArray = explode(' ', $nom);
       $newString = '';
       foreach ($wordsArray as $word) {
           // Ignorer les espaces vides
           if (!empty(trim($word))) {
               $newString .= strtoupper(substr($word, 0, 1));
           }
       }

       $wordsArray = explode(' ', $prenom);
       $newString1 = '';
       foreach ($wordsArray as $word) {
           // Ignorer les espaces vides
           if (!empty(trim($word))) {
               $newString1 .= strtoupper(substr($word, 0, 1));
           }
       }
       $initia2 = $newString1.$newString;
    //    dd(  $initia2);
       $etudiantExistant = Etudiant::where([
        'nom' => $nom,
        'prenom' => $prenom,
        'matricule' => $matricule,
    ])->first();

    if ($etudiantExistant) {
        // Si l'étudiant existe déjà, rediriger avec un message d'erreur
        return redirect()->back()->with('error', 'Un étudiant avec les mêmes informations existe déjà.');
    }
    // Enregistrer l'étudiant dans la base de données
    // Créer une instance d'Etudiant avec les données
    $etudiant = new Etudiant();
    $etudiant->matricule = $matricule;
    $etudiant->nom = $nom;
    $etudiant->prenom = $prenom;
    $etudiant->date_naissance = $date_naiss;
    $etudiant->lieu_naissance = $lieu_naiss;
    
    // Enregistrer l'étudiant dans la base de données
    $etudiant->save();

    EtudiantFiliereNiveau::create([
      'etudiant'=>Etudiant::where(['matricule'=>$matricule])->firstOrFail()->matricule,
      'filiere'=>Filiere::where(['id_filiere'=>$filiere])->firstOrFail()->id_filiere,
      'niveau'=>Niveau::where(['id_niveau'=>$niveau])->firstOrFail()->id_niveau
    ]);
    // Supprimer les caractères non numériques de la date de naissance
     $birthDayDigits = preg_replace('/[^0-9]/', '', $date_naiss);
     

    // Calculer la somme des chiffres de la date de naissance
     $sum = array_sum(str_split($birthDayDigits));
     $id_anne = str_replace('/', '', $anneeAcademique);
     $id_anne = str_replace('0', '', $id_anne);
     $niveau=Niveau::where('id_niveau',$niveau)->first();
     $filiere=Filiere::where('id_filiere',$filiere)->first();

     $firstFourLetters = substr($filiere->id_filiere, 0, 4);
     // Supprimer les chiffres de la chaîne
     $onlyLetters = preg_replace('/[^a-zA-Z]/', '', $firstFourLetters);
     // Former le nouveau mot en majuscules
     $newWord = strtoupper($onlyLetters);

    $releve = new Releve();
    $id_new_rel = "000$sum/$initia2/$niveau->id_niveau/FS/".$newWord."/$id_anne"; 
    $releve->id_releve = $id_new_rel;// Générez un ID unique pour chaque relevé
    $releve->etudiant = $matricule;
    $releve->decision = 'ECHEC'; // Définissez la décision appropriée
    $releve->filiere = $filiere->nom_filiere; // Définissez la filière appropriée
    $releve->niveau = $niveau->nom_niveau;
    $releve->mgp = 0;
    $releve->anneeAcademique = $anneeAcademique;
    $releve->save();
    $releves=Releve::where(['niveau'=>$niveau->nom_niveau, 'filiere'=>$filiere->nom_filiere])->get(); 
    $etudiants=Etudiant::all();
    return view('etudiant',compact('etudiants','niveau','releves','filiere'));
    }
}
