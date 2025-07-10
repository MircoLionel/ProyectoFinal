<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class educativoController extends Controller
{
    public function index()
    {
        
        return view('educativo.index');
    }
    public function show($id)
    {
        return view('educativo.show', ['id' => $id]);
    }
    public function create()
    {
        return view('educativo.create');
    }
}
