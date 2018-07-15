@extends('layouts.app', ['active_navbar_item' => 'Min_Samling'])


@section('content')
<br>


<?php
    $userHasComic = $comic->userHasIt(Auth::id()); 
    $userComicRecordExist=$comic->existingUserComicRecord(Auth::id());
    $serie=$comic->serie;  
    $index= $serie[0]; 

    function IsChecked($value, $id)
  {
    if ($value == $id)
       echo 'checked';
    
  }
?>



<div class="container">
  <div class="row">
    <div class="col-lg-12">
    
       
        <div class="container-inputForms">
          <div class="container-header" style="margin-bottom:10px"><h4>{{ 'Anmeld : '.$collection->name.' Nr. '.$comic->serienumber. '  -  '.$comic->subtitle  }}</h4></div>
     

        <div class="container">
          <div class="row" style="margin:0px">
            
            <div class="col-lg-3">
              <div style="margin-right:10px;margin-bottom:10px; ">
                <img src="{{ asset('images/frontpages/' .$index.'/'. $comic->frontpage) }}" class="img-fluid" style="border: 1px solid rgb(151, 151, 151);"/>
              </div>
            </div>    
          @if ( $userHasComic  )
            <!-- THIS SECTION IS FOR EDITING A USERCOMIC IF USER HAS IT -->
            <div class="col-lg-9" >
              <form method="POST" action="/reviewcomic/{{$comic->id}}">   
              {{ method_field('PUT') }}  {{ csrf_field() }} 
              <input type="hidden" name="comic_id" value="{{ $comic->id}}">           
                <div style="">
                  <div class="row" style="margin-left:0px">
                    <div class="col-lg-12">
                      <h5 style="float:left;display:inline-block;line-height:2.6">Giv din anmeldelse af album: </h5>
                      {{$usercomic->likes}}
                    
                  
                      <ul class="rate-area">
                      <input type="hidden" name="rating" value="0">
                      <input type="radio" id="6-star" name="rating" value="6" <?php Ischecked($usercomic->likes,6);?>/><label for="6-star" title="Amazing">6 stars</label>
                      <input type="radio" id="5-star" name="rating" value="5" <?php Ischecked($usercomic->likes,5);?>/><label for="5-star" title="Very Good">5 stars</label>
                      <input type="radio" id="4-star" name="rating" value="4" <?php Ischecked($usercomic->likes,4);?>/><label for="4-star" title="Good">4 stars</label>
                      <input type="radio" id="3-star" name="rating" value="3" <?php Ischecked($usercomic->likes,3);?>/><label for="3-star" title="Average">3 stars</label>
                      <input type="radio" id="2-star" name="rating" value="2" <?php Ischecked($usercomic->likes,2);?>/><label for="2-star" title="Not Good">2 stars</label>
                      <input type="radio" id="1-star" name="rating" value="1" <?php Ischecked($usercomic->likes,1);?>/><label for="1-star" title="Bad">1 star</label>
                     </ul>
                    </div>
                  </div>
                </div>
            



            <hr>

            <div class="form-group">
              <label for="comment"><h5>Skriv anmeldelse</h5></label>
                <textarea class="form-control" id="comment" name="comment" value="" rows="8">{{$usercomic->comment}}</textarea>
            </div>
            <a href="{{ action('CollectionController@show',[$collection->id]) }}" style="margin:5px;margin-top:6px;float:right" class="btn btn-info" role="button">Fortryd</a>
            <button type="submit" style="margin:5px;margin-top:6px;float:right" class="btn btn-info">Send Anmeldelse</button>
              
            </div>
        
            </form>
      
          
            
           

          
            @endif

        </div>






      </div>
    </div>
  </div>       


              
@endsection