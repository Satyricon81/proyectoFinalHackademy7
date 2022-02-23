<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    /**
    * Handle the incoming request.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function __invoke()
    {     //simulacion de database
        $team = [
            [
                "name"=>"Pablo",
                "surname"=>"Gutierrez",
                "age"=> 40,
                "charge"=> "CEO",
                "avatar"=>"imagenes_propias/businessman (1).png"
            ],
            [
                "name"=>"Juan Carlos",
                "surname"=>"Santiago",
                "age"=> 23,
                "charge"=> "CEO",
                "avatar"=>"imagenes_propias/businessman (2).png"
                ]
                
            ];
            /* Una de las formas para las card dinamicas con pareja clave=>valor ['team'=>$team] */
            return view('aboutUs', compact('team')); //compact ('nombre del array').
        }
    }
    
    