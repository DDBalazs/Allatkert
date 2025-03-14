<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jegyek;
use App\Models\Allatok;

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

        ],[

        ]);
    }
}
