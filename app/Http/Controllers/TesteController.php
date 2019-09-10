<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TesteController extends Controller
{
    public function index(Request $req)
    {
        $validator = Validator::make($req->all(), [
        'nome' => 'required|max:10|alpha|ends_with:a',
        'idade' => 'sometimes|numeric'
    ]);

    if($validator->fails()){
        $errors = $validator->errors()->all();
    }


        $nome = $req->nome;
        $ola = 'mundo!';

        echo "Hello Woooorld!, $nome";
        return view ('index', compact(['nome', 'ola','errors']));
    }

    public function index2($nome, $idade=null)
    {

        echo "Hello Woooorld!, $nome<br>";
        if($idade) {
            echo "Vc tem $idade anos.<br>";
        }
        return view ('welcome');
    }

    public function indexPost(Request $req)
    {
        return "Postei! $req->telefone";
    }
}
