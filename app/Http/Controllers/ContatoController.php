<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function principal () {
        echo 'Aqui você esta na pagina de Contato';
    }

    public function contato () {
        echo 'Seja Bem-Vindo';
    }
}
