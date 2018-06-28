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
        $usercomic->comment = request('comment');
        $usercomic->status = request('status');
        $usercomic->wanted = request('wanted');
        $usercomic->save();
        
        $collectionID = Comic::find($usercomic->comic_id)->getCollectionID->id;    
        
        return redirect()->action('CollectionController@show', ['id' => $collectionID]);
       
    }

    /**
     * Post an Inquiry for comic.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postInquiry($id)
    {
        $comic = Comic::findOrFail($id);
        $collection = $comic->getCollectionID;
        $userHasComic = $comic->userHasIt(Auth::id());
        if ($userHasComic)
        {
            $usercomic = Usercomic::where([['user_id', '=', Auth::id()],['comic_id', '=', $id]])->firstOrFail();
                return view('usercomic.postInquiry',\compact('comic','collection','usercomic'));    
        }
        else
        {
            return view('usercomic.postInquiry',\compact('comic','collection'));
        }
       
    }

    /**
     * Remove an Inquiry for comic.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function removeInquiry($id)
    {
        $usercomic = Usercomic::where([
            ['user_id', '=', Auth::id()],
            ['comic_id', '=', $id]])->firstOrFail();
        $usercomic->wanted = "0";   
        //dd("I'm here");
        $usercomic->save();   

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
        $usercomic = Usercomic::where([
            ['user_id', '=', Auth::id()],
            ['comic_id', '=', $id]])->firstOrFail();
        $usercomic->condition = request('condition');
        $usercomic->comment = request('comment');
        $usercomic->wanted = request('wanted');
        $usercomic->status = request('status');
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
        $serie=$comic->serie;  
        $index= $serie[0];  
        $collection = $comic->getCollectionID;
        $userHasComic = $comic->userHasIt(Auth::id());
        if ($userHasComic)
        {
            $usercomic = Usercomic::where([['user_id', '=', Auth::id()],['comic_id', '=', $id]])->firstOrFail();
                return view('usercomic.edit',\compact('comic','collection','usercomic'));    
        }
        else
        {
            return view('usercomic.edit',\compact('comic','collection'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
        //$usercomic = Usercomic::where('comic_id', $id)->firstOrFail();
        
        $usercomic = Usercomic::where([
            ['user_id', '=', Auth::id()],
            ['comic_id', '=', $id]])->firstOrFail();
   
        //$comic = new Comic;
       
        $collectionID = Comic::find($usercomic->comic_id)->getCollectionID->id;    
        
        $usercomic ->delete();

        return redirect()->action('CollectionController@show', ['id' => $collectionID]);
    }


}
