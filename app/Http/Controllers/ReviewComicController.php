<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Comic;
use App\Usercomic;

class ReviewComicController extends Controller
{
    /*****************************************************************************************/
    /* AUTHENTICATION                                                                        */
    /* This section authenticates if user is logged in, otherwise redirected to login page   */
    /*************************************************************************************** */
    public function __construct()
    {
        $this->middleware('auth');
    }

    
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
            
            // this mean user has not given it any stars
            if (request('rating') == '0')
            {
               //some sort of erromessage to user     
            }
            // if comic has not been rated by user
            else if ($usercomic->rated == '0')
            {       
                $usercomic->rated = '1';
                $comic = Comic::find($id);
                $comic->votes = $comic->votes+1;
                $usercomic->likes = request('rating');
                $comic->total_likes = $comic->total_likes+$usercomic->likes;
                $comic->save();
            }
            // if user in a previous session has rated comic
            else
            {
                $comic = Comic::find($id);
                if ($comic->votes == 0)  
                {
                    dd("Something is not matching in database sanity check. ReviewComicController logged this error. Contact site-administrator"); 
                }
                $comic->total_likes = $comic->total_likes-$usercomic->likes;
                $usercomic->likes = request('rating');
                $comic->total_likes = $comic->total_likes+$usercomic->likes;
                $comic->save();
            }

            

            
            
         
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
