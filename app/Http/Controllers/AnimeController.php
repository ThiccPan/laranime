<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use Illuminate\Http\Request;

class AnimeController extends Controller
{
    //
    public function index() {
        // return "test";
        $animes = Anime::all();
        return view("anime.index",compact("animes"));
    }

    public function create() {
        // return "test";
        return view("anime.create");
    }

    public function insert(Request $request) {
        // dd($request->all());
        Anime::create($request->except(['_token','submit']));
        return redirect('/anime');
    }

    public function edit($id)
    {
        $animeEdit = Anime::find($id);
        // dd($animeEdit);
        return view("anime.edit",compact("animeEdit"));
    }

    public function update($id, Request $request)
    {
        $anime = Anime::find($id);
        $anime->update($request->except(['_token','submit']));
        return redirect('/anime');
    }

    public function destroy($id) {
        $anime = Anime::find($id);
        $anime->delete();
        return redirect('/anime');
    }


}
