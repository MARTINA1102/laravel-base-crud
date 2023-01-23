<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    //
    // Display a listing of the resource.
    //
    //@return\Illuminate\Http\Response

    public function index()
    {
        $comics = Comic::paginate(5);
        return view('comics.index', ['comics' => $comics]);
    }


    // Show the form for creating a new resource.
    // @return\Illuminate\Http\Response

    public function create()
    {
        {
            return view('comics.create');
        }

    }


    // Store a newly created resource in storage.
    // @param  \Illuminate\Http\Request  $request
    // @return \Illuminate\Http\Response

    public function store(Request $request)
    {
        $data = $request->all();
        $comic = new Comic();
        $comic->title = $data['title'];
        $comic->description = $data['description'];
        $comic->thumb = $data['thumb'];
        $comic->price = $data['price'];
        $comic->series = $data['series'];
        $comic->sale_date = $data['sale_date'];
        $comic->type = $data['type'];
        $comic->save();
        return redirect()->route('comics.show', $comic->id);
    }

    // Display the specified resource.

    //  @param  int  $id
    //  @return \Illuminate\Http\Response

    public function show(Comic $comic)
    {
        return view('comics.show',[
            'comic' => $comic,
        ]);
    }


    //  Show the form for editing the specified resource.

    // @param  int  $id
    // @return \Illuminate\Http\Response

    public function edit(Comic $comic)
    {
        return view('comics.edit',[
            'comic' => $comic,
        ]);
    }


    //  Update the specified resource in storage.

    // @param  \Illuminate\Http\Request  $request
    // @param  int  $id
    // @return \Illuminate\Http\Response

    public function update(Request $request, Comic $comic)
    {
        $data = $request->all();
        $comic->city        = $data['title'];
        $comic->price       = $data['description'];
        $comic->street      = $data['thumb'];
        $comic->is_rent     = $data['price'] ?? false;
        $comic->free_from   = $data['series'];
        $comic->rooms       = $data['sale_date'];
        $comic->surface     = $data['type'];
        $comic->update();

        // dd($house->id);

        return redirect()->route('comics.show', ['comic' => $comic]);
    }


    // Remove the specified resource from storage.

    // @param  int  $id
    // @return \Illuminate\Http\Response

    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index')->with('success_delete', $comic->id);
    }
}
