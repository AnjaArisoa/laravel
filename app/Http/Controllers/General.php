<?php

namespace App\Http\Controllers;


use App\Models\Donnechart;
use App\Models\User;
use App\Models\Film;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class General extends Controller
{
    public function liste(){
        $film=Film::all();
        return view('template.listeSimple',compact('film'));
    }
    public function form(){
        return view('template.forms');
    }
    public function chart(){
        $donne = Donnechart::all();
        return view('template.charts',compact('donne'));
    }
    public function chartC(){
        return view('template.chartCam');
    }
    public function dashboard(){
        return view('template.dashboard');
    }
    public function listeComplexe(){
        $film=Film::paginate(2);
        return view('template.tablePaginate',compact('film'));
    }

}
