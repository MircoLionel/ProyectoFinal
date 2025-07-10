<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class internacionalController extends Controller
{
    public function index()
    {
        return view('internacional.index');
    }

    public function show($id)
    {
        return view('internacional.show', ['id' => $id]);
    }

    public function create()
    {
        return view('internacional.create');
    }
}
