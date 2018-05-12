<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Comic;
use App\Usercomic;

class UserComicController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $usercomic = new Usercomic;
        $usercomic->user_id =Auth::id();
        $usercomic->comic_id = request('comic_id');
        $usercomic->condition = request('condition');
        $usercomic->save();
        
        //$comic = new Comic;
       
        $collectionID = Comic::find($usercomic->comic_id)->getCollectionID->id;    
        
        return redirect()->action('CollectionController@show', ['id' => $collectionID]);
       
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::findOrFail($id);
        $serie=$comic->serie;  
        $index= $serie[0];  
        return view('usercomic.edit',\compact('comic','index','id'));
        /*dd('Im here !');*/
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
        $usercomic = Usercomic::where('comic_id', $id)->firstOrFail();
        
        $usercomic = Usercomic::where([
            ['user_id', '=', Auth::id()],
            ['comic_id', '=', $id]])->firstOrFail();
   
        //$comic = new Comic;
       
        $collectionID = Comic::find($usercomic->comic_id)->getCollectionID->id;    
        
        $usercomic ->delete();

        return redirect()->action('CollectionController@show', ['id' => $collectionID]);
    }


}
