<?php

namespace App\Http\Controllers;

use App\Models\Ponencia;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $ponencias = Ponencia::all();
        return view('welcome', compact('ponencias'));
    }
}
