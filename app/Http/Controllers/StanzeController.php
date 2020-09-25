<?php

namespace App\Http\Controllers;

use App\Stanza;
use Illuminate\Http\Request;

class StanzeController extends Controller{
    
    public function index() {

        $stanze = Stanza::all();
        return view('stanza.index', compact('stanze'));
    }

    public function show($id) {

        $stanza = Stanza::findOrFail($id);
        return view('stanza.show', compact('stanza'));

        
    }

    public function create() {
        return view ('stanza.indx');
    }

    
   public function store(request $request){

    $data = $request -> all();
    $stanza = Stanza::create($data);

    return redirect() -> route('stanza-index');

 }
}
