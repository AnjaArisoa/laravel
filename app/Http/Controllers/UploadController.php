<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function redirect_upload(){
        return view('template.upload');
    }
    public function traitement_upload(Request $request){
        if ($request->has('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() .'.'. $extension;

            $path = 'uploads/img';
            $file->move($path, $filename);
            return redirect(route('general.upload'))->with('status','Ajouter Reussie');
        }
        return  back()->withErrors(['upload' => 'impossible']);
    }
}
