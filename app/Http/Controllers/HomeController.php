<?php

namespace App\Http\Controllers;

use App\Acidente;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $ano = Acidente::where('ano', 2015)->get();
        $tudo = Acidente::where('uf')->get();

        $todo_resultado = count($tudo);
        $segunda = Acidente::where('dia_semana', "Segunda")->get();
        $terca = Acidente::where('dia_semana', "Terca")->get();
        $quarta = Acidente::where('dia_semana', "Quarta")->get();
        $quinta = Acidente::where('dia_semana', "Quinta")->get();
        $sexta = Acidente::where('dia_semana', "Sexta")->get();
        $sabado = Acidente::where('dia_semana', "Sabado")->get();
        $domingo = Acidente::where('dia_semana', "Domingo")->get();
        //dd(auth()->user());
        $resultado_segunda = count($segunda);
        $resultado_terca = count($terca);
        $resultado_quarta = count($quarta);
        $resultado_quinta = count($quinta);
        $resultado_sexta = count($sexta);
        $resultado_sabado = count($sabado);
        $resultado_domingo = count($domingo);
        $dia_da_semana[0] = $resultado_segunda ? $resultado_segunda : 0;
        $dia_da_semana[1] = $resultado_terca ? $resultado_terca : 0;
        $dia_da_semana[2] = $resultado_quarta ? $resultado_quarta : 0;
        $dia_da_semana[3] = $resultado_quinta ? $resultado_quinta : 0;
        $dia_da_semana[4] = $resultado_sexta ? $resultado_sexta : 0;
        $dia_da_semana[5] = $resultado_sabado ? $resultado_sabado : 0;
        $dia_da_semana[6] = $resultado_domingo ? $resultado_domingo : 0;
        $dia_da_semana[7] = $tudo ? $tudo : 0;
        return view('home', compact('dia_da_semana'));
    }
}
