<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class nacionalController extends Controller
{
    public function index()
    {
        return view('nacional.index');
    }

    public function show($id)
    {
        return view('nacional.show', ['id' => $id]);
    }

    public function create()
    {
        return view('nacional.create');
    }
}
