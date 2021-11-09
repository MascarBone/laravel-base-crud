<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Method filling every field
        // $newComic = new Comic;        
        // $newComic->title = $request['title'] ;
        // $newComic->description = $request['description'] ;
        // $newComic->thumb = $request['thumb'];
        // $newComic->price = $request['price'];
        // $newComic->series = $request['series'];
        // $newComic->sale_date = $request['sale_date'];
        // $newComic->type = $request['type'];
        // $newComic->artists = $request['artists'];
        // $newComic->writers = $request['writers'];

        // Method using fill();
        // $newComic = new Comic;
        // $newComic -> fill($request->all());

        // Method using create();
        $newComic = Comic::create($request->all());

        $newComic->save();

        // dd($newComic);


        return redirect()->route('comics.show', $newComic);
    }

    /**
     * Display the specified resource.
     *
     * @param  Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {       
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        // dd($comic);
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        
        $comic->update($request->all());
        
        return redirect()->route('comics.show', compact('comic'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Comic $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index')->with('item', $comic->title);
    }
}
