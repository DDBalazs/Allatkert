<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jegyek;
use App\Models\Allatok;
use App\Models\Hirlevel;

class AllatkertController extends Controller
{
    public function Welcome(){
        return view('welcome',[
            'result'    => Jegyek::select('megnevezes','reszletek','ar')
                                    ->where('jegytipus',1)
                                    ->get(),
            'result2'   => Jegyek::select('megnevezes','reszletek','ar')
                                    ->where('jegytipus',2)
                                    ->get(),
            'result3'   => Jegyek::select('megnevezes','reszletek','ar')
                                    ->where('jegytipus',3)
                                    ->get()
        ]);
    }
    public function Emlosok(){
        return view('/emlosok',[
            'emlosok'    =>  Allatok::select('allat_id','nev','latin_nev','elofordulas')
                                    ->where('kategoria','e')
                                    ->OrderBy('nev')
                                    ->get()
        ]);
    }
    public function Madarak(){
        return view('/madarak',[
            'madarak'    =>  Allatok::select('allat_id','nev','latin_nev','elofordulas')
                                    ->where('kategoria','m')
                                    ->OrderBy('nev')
                                    ->get()
        ]);
    }
    public function Hullok(){
        return view('/hullok',[
            'hullok'    =>  Allatok::select('allat_id','nev','latin_nev','elofordulas')
                                    ->where('kategoria','h')
                                    ->OrderBy('nev')
                                    ->get()
        ]);
    }
    public function Hirlevel(Request $req){
        $req->validate([
            'nev'   =>  'required',
            'email' =>  'required|email'
        ],[
            'nev.required'      =>  'Nevet kötelező megadni!',
            'email.required'    =>  'E-mail címet kötelező megadni!',
            'email.email'       =>  'Nem megfelelő e-mail cím formátumot adott meg!'
        ]);
        $data = new hirlevel;
        $data->nev      = $req->nev;
        $data->email    = $req->email;
        if($data->Save()){
            return view('success');
        }

    }
}
