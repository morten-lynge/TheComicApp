<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;


class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');

        $this->middleware('admin')->only('create');

       
    }


    public function index()
    {
        $comics = Comic::all();
        return view('comic.index',compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comic.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* Validate iput */
        $this->Validate(request(), [
            'title' => 'required',
            'subtitle' => 'required',
        ]);

        $comic = new Comic ;
        $comic->comic_title = request('title');
        $comic->comic_subtitle = request('subtitle');
        $comic->resume = request('resume');
        $comic->

        $comic->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::findOrFail($id);
        

        return view('comic.show',\compact('comic'));
        
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
        return view('comic.edit',\compact('comic','id'));
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
        $this->validate($request, [
            'title' => 'required|max:1000|min:2'
        ]);

      
        $comic = Comic::find($id);
        $comic->serie = request('serie'); 
        $comic->title = request('title');
        $comic->subtitle = request('subtitle');

        
        $comic->save();

        return redirect('/');
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
