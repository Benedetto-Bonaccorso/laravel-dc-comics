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
        return view("admin.comics.index", compact("comics"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.comics.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newComic = new Comic();
        $newComic->title = $request["title"];
        $newComic->description = $request["description"];
        $newComic->thumb = $request["thumb"];
        $newComic->price = $request["price"];
        $newComic->series = $request["series"];
        $newComic->sale_date = $request["sale_date"];
        $newComic->type = $request["type"];
        $newComic->save();
        return to_route("comics.index");

        /*
        $newComic = new Comic();
        $newComic->title = "prova";
        $newComic->description = "prova";
        $newComic->thumb = "prova";
        $newComic->price = 1.1;
        $newComic->series = "prova";
        $newComic->sale_date = "prova";
        $newComic->type = "prova";
        $newComic->save();
        return to_route("comics.index");
        */
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view("admin.comics.edit", compact("comic"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
 
        $data = [
            'title' => $request['title'],
            'description' => $request['description'],
            'thumb' => $request['thumb'],
            'price' => $request['price'],
            'series' => $request['series'],
            'sale_date' => $request['sale_date'],
            'type' => $request['type'],
        ];

        $comic->update($data);
        
        return to_route('comics.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
