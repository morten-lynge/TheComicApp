<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Comic;
use App\Collection;
use App\Usercomic;
use App\Usercollection;

class UserCollectionController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        /*********************************************************************************************************/
        /* EDIT USER COLLECTION                                                                                  */
        /* Check if usercollection exsist in database. If not create entry in database table "usercollections"   */
        /* Return view /usercollection/edit.blade.php                                                            */   
        /*********************************************************************************************************/
        $collection = Collection::findOrFail($id);
        $usercollectionExist = $collection->usercollectionExist(Auth::id());
        if (! $usercollectionExist) 
        {
            $usercollection = new Usercollection;
            $usercollection->user_id =Auth::id();
            $usercollection->collection_id = $id;
            $usercollection->save();
        } 
        $usercollection = Usercollection::where([['user_id', '=', Auth::id()],['collection_id', '=', $id]])->firstOrFail();
        //dd($usercollection);
        return view('usercollection.edit',\compact('collection','usercollection'));
        //return view('usercollection.edit',\compact('collection'));
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
        $usercollection = Usercollection::where([['user_id', '=', Auth::id()],['collection_id', '=', $id]])->firstOrFail();
        
      
        $usercollection->popularity = request('rating');
        //$usercomic->save();  
        
        if ($usercollection->rated == 0 )
        {
            $usercollection->rated = 1;
            $usercollection->save();
        }

        else 
        {
            $usercollection->save();
        }
        
       
        
        return redirect()->action('CollectionController@show', ['id' => $id]);
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
