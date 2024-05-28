<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

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

        $data = [
            'comics' => $comics
        ];

        return view('comics.index', $data);
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
        $formdata = $request->all();

        $newComic = new Comic();
        $newComic->title = $formdata['title'];
        $newComic->description = $formdata['description'];
        $newComic->image = $formdata['image'];
        $newComic->price = $formdata['price'];
        $newComic->series = $formdata['series'];
        $newComic->sale_date = $formdata['sale_date'];
        $newComic->type = $formdata['type'];
        $newComic->save();

        $validated = $request->validate(
            [
                'title' => 'required|max:250|min:10',
                'description' => 'required|max:5000|min:10',
                'image' => 'required',
                'price' => 'required',
                'series' => 'required|max:150',
                'sale_date' => 'required',
                'type' => 'required|max:150'
            ],
            [
                'title.required' => 'Inserisci un titolo per il tuo fumetto',
                'title.max' => 'Il titolo può essere al massimo di 250 caratteri',
                'title.min' => 'Il titolo può essere al minimo di 10 caratteri',
                'description.required' => 'Inserisci una descrizione per il tuo fumetto',
                'description.max' => 'la descrizione può essere al massimo di 5000 caratteri',
                'description.min' => 'la descrizione può essere al minimo di 10 caratteri',
                'image.required' => 'Inserisci una immagine per il tuo fumetto',
                'price.required' => 'Inserisci un prezzo per il tuo fumetto',
                'series.required' => 'Inserisci una serie per il tuo fumetto',
                'series.max' => 'la serie può essere al massimo di 5000 caratteri',
                'sale_date.required' => 'Inserisci una sale_date per il tuo fumetto',
                'type.required' => 'Di che tipo è il tuo fumetto?',
                'type.max' => 'il tipo può essere al massimo di 5000 caratteri'
            ]
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::find($id);

        $data = [
            'comic' => $comic
        ];

        return view('comics.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::findOrFail($id);

        $data = [
            'comic' => $comic
        ];

        return view('comics.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $formData = $request->all();
        $comic = Comic::findOrFail($id);
        $comic->title = $formData['title'];
        $comic->description = $formData['description'];
        $comic->image = $formData['image'];
        $comic->price = $formData['price'];
        $comic->series = $formData['series'];
        $comic->sale_date = $formData['sale_date'];
        $comic->type = $formData['type'];
        $comic->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = Comic::findOrFail($id);
        $comic->delete();

        dd('hai cancellato con successo il comic!');
    }
}
