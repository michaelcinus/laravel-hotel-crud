<?php

namespace App\Http\Controllers;

use App\Stanza;
use Illuminate\Http\Request;

class StanzeController extends Controller
{
    public function index() {

        $stanze = Stanza::all();
        return view('home', compact('stanze'));
    }
}
