<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Exception;
use App\Models\Film;

class CsvController extends Controller
{
    public function redirect_csv(){
        return view('template.csv');
    }
    /*public function traitement_csv(Request $request) {
        if ($request->hasFile('csv_file')) {
            $path = $request->file('csv_file')->getRealPath();
            $data = array_map('str_getcsv', file($path));
            // Skip the first line (headers) of the CSV file
            array_shift($data);
            foreach ($data as $row) {
                DB::table('film')->insert([

                    'nomFilm' => $row[1]

                ]);
            }
            return redirect(route('general.Rcsv'));
        }

    }*/
    public function traitement_csv(Request $request) {
        if ($request->hasFile('csv_file')) {
            try {
            $path = $request->file('csv_file')->getRealPath();
            $data = array_map('str_getcsv', file($path));
            array_shift($data);
            foreach ($data as $row) {
                DB::table('seance_csv')->insert([
                    'numseance' => $row[0],
                    'film' => $row[1],
                    'categorie' => $row[2],
                    'salle' => $row[3],
                    'date' => $row[4],
                    'heure' => $row[5],
                ]);
            }
            DB::insert('insert into film(nomfilm) select film from seance_csv group by film');
            DB::insert('insert into salle(nomsalle) select salle from seance_csv group by salle');
            DB::insert('insert into categorie(nomcategorie) select categorie from seance_csv group by categorie');
            DB::insert(' insert into seance(idseance,idfilm,idcategorie,idsalle,date,heure) select numseance,idfilm,idcategorie,idsalle,date,heure from seance_csv join film on seance_csv.film=film.nomfilm join categorie on seance_csv.categorie=categorie.nomcategorie join salle on salle.nomsalle=seance_csv.salle');
            return redirect(route('general.Rcsv'));
        }
        catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
        }

    }
    public function export_csv(){
        $film=Film::all();
        $csv = \League\Csv\Writer::createFromFileObject(new \SplTempFileObject());

        $csv->insertOne(['idFilm', 'nomFilm']);

        foreach ($film as $fi) {
            $data = [
                'idFilm' => $fi->idfilm,
                'nomFilm' => $fi->nomfilm,
            ];
            $csv->insertOne($data);
        }
        $csv->output('films.csv');
        exit;
    }

}
