<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
   
    public function index()
    {
        return "ESTA ES LA PAGINA DE POST";
    }

    public function create()
    {
        return "Aqui se mostrara un formulario para crear un post" ;
    }

    public function show($post)
    {
        return "Aqui se mostrara el post: " . $post ;
    }
}
