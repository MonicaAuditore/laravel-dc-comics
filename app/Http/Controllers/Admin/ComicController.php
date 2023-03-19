<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//Models
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

    private function validateData(Request $request) {
    //Valido i dati 
    $request->validate([
    'title'=>'required|max:255',
    'price'=>'required|numeric|min:4',
    'series'=>'required|max:255',
    'sale_date'=>'required|max:255',
    'type'=>'required|max:255'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //Valido i dati 
        $this->validateData($request);

        //Prendi i dati
        $data = $request->all();

        //Utilizzo i dati
        $comicModel = new Comic;
        $comicModel->title = $data['title']; 
        $comicModel->description = $data['description'];
        $comicModel->thumb = $data['thumb'];
        $comicModel->price = $data['price'];
        $comicModel->series = $data['series'];
        $comicModel->sale_date = $data['sale_date'];
        $comicModel->type = $data['type'];
        $comicModel->save();

        return redirect()->route('comics.show', $comicModel->id);
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
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::find($id);
        return view('comics.edit', compact('comic'));
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

        $comic = Comic::find($id);

    //Valido i dati 
    $request->validate([
        'title'=>'required|max:255',
        'price'=>'required|numeric|min:4',
        'series'=>'required|max:255',
        'sale_date'=>'required|max:255',
        'type'=>'required|max:255'
    ]);

        //Prendo i dati
        $data = $request->all();

        //Utilizzo i dati
        $comic->update($data);

       return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = Comic::find($id);
        $comic->delete();
        return redirect()->route('comics.index');

    }
}
