<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Comic;
use App\Usercomic;

class ReviewComicController extends Controller
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
        
        $usercomic->save();
        
        $collectionID = Comic::find($usercomic->comic_id)->getCollectionID->id;    
        
        return redirect()->action('CollectionController@show', ['id' => $collectionID]);
       
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
        $collection = $comic->getCollectionID;
        $userHasComic = $comic->userHasIt(Auth::id());
        if ($userHasComic)
        {
            $usercomic = Usercomic::where([['user_id', '=', Auth::id()],['comic_id', '=', $id]])->firstOrFail();
                return view('reviewcomic.edit',\compact('comic','collection','usercomic'));    
        }
        else
        {
            return view('reviewcomic.edit',\compact('comic','collection'));
        }
    }

}
