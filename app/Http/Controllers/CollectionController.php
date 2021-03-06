<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Collection;

class CollectionController extends Controller
{
    /*****************************************************************************************/
    /* AUTHENTICATION                                                                        */
    /* This section authenticates if user is logged in, otherwise redirected to login page   */
    /*************************************************************************************** */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin')->only('create');
    }
        
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $collections = Collection::all();
        //$indeks = 'J';
        //$collections = Collection::where('name', 'LIKE', $indeks.'%')->get();

        return view('collection.index',compact('collections'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    
    
    public function show($id)
    {
        $collection = Collection::findOrFail($id);
        $name = $collection->name;
        $description = $collection->description;
        $index= $name[0]; 
        //dd($index);
        return view('collection.show',compact('collection','index','name'));
        
    }

    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $collection = Collection::findOrFail($id);
        $name = $collection->name;
        $index= $name[0]; 
        return view('collection.edit',compact('collection','index','name'));
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
