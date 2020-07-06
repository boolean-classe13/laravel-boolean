<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $data = [
            'nome' => 'Pippo',
            'cognome' => 'Rossi',
            'eta' => 30,
            'colore' => 'blu'
        ];
        return view('home', $data);
    }

    public function contatti() {
        $persona = 'Mario Rossi';
        return view('contatti', compact("persona"));
    }

    public function faq() {
        $faqs = config('faq.lista_faq');
        // return view('faq')->with(['domande_risposte' => $faqs]);
        return view('faq', ['domande_risposte' => $faqs]);
    }
}
