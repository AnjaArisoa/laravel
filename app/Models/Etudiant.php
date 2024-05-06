<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Etudiant extends Model
{
    protected $table = 'etudiant';
    protected $fillable = ['nom', 'prenom', 'dtn'];

    public  function insererEtudiant($nom, $prenom, $dtn)
    {
        DB::table('etudiant')->insert([
            'nom' => $nom,
            'prenom' => $prenom,
            'dtn' => $dtn,
        ]);
        DB::insert('insert into etudiant values(?,?,?)',[$nom,$prenom,$dtn]);
    }
   public static function getEtudiantsParNom($nom)
{
    $results = DB::select('SELECT * FROM etudiant WHERE nom = ?', [$nom]);
    return self::hydrate($results);
}
public function updateEtudiant($nom,$prenom,$dtn){
    DB::update('UPDATE Etudiant set nom =? and prenom =? and dtn =?',[$nom,$prenom,$dtn]  );

}

}
