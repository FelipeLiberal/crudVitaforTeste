<?php

namespace App\Http\Controllers;
use App\Models\Character;
use Redirect;
use Illuminate\Http\Request;

class CharactersController extends Controller
{
    public function index(){
        $characters = Character::get();
        return view('characters.list', ['characters'=> $characters]);
    }

    public function new(){
        return view('characters.form');
    }

    public function add( Request $request ){

        $character = new Character;
        $character = $character->create( $request->all( ));
        return Redirect::to('/characters');
    }

    public function edit( $id ){
        $character = Character::findOrFail( $id );
        return view('characters.form', ['character' => $character]);
    }

    public function update( $id, Request $request){
        $character = Character::findOrFail( $id );
        $character -> update( $request->all());
        return Redirect::to('/characters');
    }

    public function delete( $id ){
        $character = Character::findOrFail( $id );
        $character->delete();
        return Redirect::to('/characters');
    }
}
