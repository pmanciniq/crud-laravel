<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        return "todos los cursos";
    }

    public function create(){
        return "En esta página crearas un curso";
    }

    public function show($curso){
        return "Pagina del curso: $curso";
    }

}
