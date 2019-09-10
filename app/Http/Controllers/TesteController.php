<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function index(Request $req)
    {
        $nome = $req->nome;

        echo "Hello Woooorld!, $nome";
        return view ('welcome');
    }

    public function index2($nome, $idade=null)
    {

        echo "Hello Woooorld!, $nome<br>";
        if($idade) {
            echo "Vc tem $idade anos.<br>";
        }
        return view ('welcome');
    }
}
