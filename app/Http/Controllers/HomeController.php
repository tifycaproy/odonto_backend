<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

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
    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['user', 'admin']);
        return view('inicio');
    }

    /*
    public function someAdminStuff(Request $request)
    {
        $request->user()->authorizeRoles(‘admin’);
        return view(‘some.view’);
    }
    */
   
    public function informe(){
        return view('informe');
    }

    public function grafica(){
        return view('grafica');
    }
    public function alerta(){
        return view('alertas');
    }

     public function informepdf(){
        return view('informepdf');
    }
    public function pdf(){
        $pdf = PDF::loadView('pdf');
        //$pdf = PDF::loadView('pdf.products', compact('products'));
        //$pdf->render();
        return $pdf->stream();
    }


}
