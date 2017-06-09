<?php

namespace App\Models;

use App\Lib\Message;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class Edition extends Model
{

    public static $rules = [
        'annee' => ['required', 'integer'],
        'texte_presentation' => ['required', 'string'],
        'lieu' => ['required', 'string'],
        'dateConcours' => ['required', 'date'],
        'texteConcours' => ['required', 'string']
    ];

    public static function getValidation(Request $request)
    {
        // Récupération des inputs
        $inputs = $request->only('anne', 'texte_presentation', 'lieu');
        echo("Dans la fonction getValidation du Model: ");
        echo(implode(" | ", $inputs));
        echo("<br />");
        // Création du validateur
        $validator = Validator::make($inputs, Edition::$rules);
        // Ajout des contraintes supplémentaires
        $validator->after(function ($validator) use ($inputs) {
            // Vérification de la non-existence de Edition
            if (Presse::exists($inputs['annee'])) {
                $validator->errors()->add('exists', Message::get('edition.exists'));
            }
        });
        // Renvoi du validateur
        return $validator;
    }


    public static function exists($annee)
    {
        // Vérifie qu'il n'existe pas de ligne dans la BD pour cette annee
        return Edition::where('annee', $annee)->first() !== null;
    }

    /**
     * Enregistre en base de données une nouvelle Edition selon les $values donnés
     * @param array $values
     */
    public static function createOne(array $values) {
        // Création d'une nouvelle instance de Edition
        echo("Dans la fonction createOne: ");
        echo(implode(" | ", $values));
        echo("<br />");
        $new = new Edition();
        // Définition des propriétés de Edition
        $new->annee = $values['annee'];
        $new->texte_presentation = $values['texte_presentation'];
        $new->lieu = $values['lieu'];
        $new->dateConcours = $values['dateConcours'];
        $new->texteConcours = $values['texteConcours'];

        // Enregistrement de Edition
        $new->save();
    }

    public function Presse(){

        return $this->hasMany('App/Models/Presse');

    }
    
    public function Niveau(){

        return $this->hasMany('App/Models/Niveau');

    }
    
    public function Publication(){

        return $this->hasMany('App/Models/Publication');

    }
    
    public function edition_media(){

        return $this->hasMany('App/Models/Edition_media');

    }
    
  
    
    public function Equipe(){

        return $this->hasMany('App/Models/Equipe');

    }

}