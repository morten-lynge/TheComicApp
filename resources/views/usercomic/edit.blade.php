@extends('layouts.app', ['active_navbar_item' => 'Min_Samling'])


@section('content')
<br>


<?php
    $userHasComic = $comic->userHasIt(Auth::id()); 
    $userComicRecordExist=$comic->existingUserComicRecord(Auth::id());
    $serie=$comic->serie;  
    $index= $serie[0]; 
?>



<div class="container">
  <div class="row">
    <div class="col-lg-12">
    
       
        <div class="container-inputForms">
        @if ( $userHasComic  )
          <div class="container-header" style="margin-bottom:10px"><h4>{{ 'Rediger : '.$collection->name.' Nr. '.$comic->serienumber. '  -  '.$comic->subtitle  }}</h4></div>
        @else
          <div class="container-header" style="margin-bottom:10px"><h4>{{ 'Tilføj : '.$collection->name.' Nr. '.$comic->serienumber. '  -  '.$comic->subtitle  }}</h4></div>
        @endif

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
              <form method="POST" action="/usercomic/{{$comic->id}}">   
              {{ method_field('PUT') }}  {{ csrf_field() }} 
              <input type="hidden" name="comic_id" value="{{ $comic->id}}">           
                <div style="">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="status" id="status" value=1 checked>
                    <label class="form-check-label" for="statusRadios1"> Jeg har denne tegneserie. </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="status" id="status" value=0>
                    <label class="form-check-label" for="statusRadios2">Jeg mangler denne tegneserier</label>
                  </div>
  


          
            <hr>
               
              <div class="row">
                <div class="col-lg-5">  
                  <label for="condition">Condition</label>
                    <select class="form-control" id="condition" name="condition">
                      <option value="{{$usercomic->condition}}" selected>{{$usercomic->getConditionName()}}</option>
                      <option value=100>(10.0) - Gem Mint</option>
                      <option value=99>(9.9) - Mint  </option>
                      <option value=98>(9.8) - Near Mint/Mint</option>
                      <option value=96>(9.6) - Near Mint+</option>
                      <option value=94>(9.4) - Near Mint</option>
                      <option value=92>(9.2) - Near Mint-</option>
                      <option value=90>(9.0) - Very Fire/Near Mint</option>
                      <option value=85>(8.5) - Very Fine+</option>
                      <option value=80>(8.0) - Very Fine</option>
                      <option value=75>(7.5) - Very Fine-</option>
                      <option value=70>(7.0) - Fine / Very Fine</option>
                      <option value=60>(6.5) - Fine+</option>
                      <option value=60>(6.0) - Fine</option>
                      <option value=55>(5.5) - Fine-</option>
                      <option value=50>(5.0) - Very Good/Fine</option>
                      <option value=45>(4.5) - Very Good+</option>
                      <option value=40>(4.0) - Very Good</option>
                      <option value=35>(3.5) - Very Good-</option>
                      <option value=30>(3.0) - Good/Very Good-</option>
                      <option value=25>(2.5) - Good+</option>
                      <option value=20>(2.0) - Good</option>
                      <option value=18>(1.8) - Good-</option>
                      <option value=15>(1.5) - Fair/Good</option>
                      <option value=10>(1.0) - Fair</option>
                    </select>
                </div>
                <div class="col-lg-7">
             
                  <label for="wanted">Efterlysning</label>
                    <select class="form-control" id="wanted" name="wanted">
                    <option value="{{$usercomic->wanted}}" selected>{{$usercomic->getWantedTextString()}}</option>
                      <option value=8>Søger flot samlerstand. Jeg skal have den for enhver pris !</option>
                      <option value=7>Søger god samlerstand. Jeg skal have den for enhver pris !</option>
                      <option value=6>Søger flot samlerstand. Jeg vil gerne give en god pris</option>
                      <option value=5>Søger god samlerstand. Jeg vil gerne give en god pris</option>
                      <option value=4>Søger flot samlerstand, men til en rimelig pris</option>
                      <option value=3>Søger god samlerstand, men til en rimelig pris</option>
                      <option value=2>Søger et læse eksemplar, men til en rimelig pris</option>
                      <option value=1>Søger et billigt læse eksemplar. Stand er ikke vigtig</option>
                      <option value=0>Ingen efterlysning</option>
                    </select>  
                </div>  
              </div>
            </div>
            <div class="form-group">
              <label for="comment">Kommentar</label>
                <textarea class="form-control" id="comment" name="comment" value="" rows="3">{{$usercomic->comment}}</textarea>
            </div>
            <a href="{{ action('CollectionController@show',[$collection->id]) }}" style="margin:5px;margin-top:6px;float:right" class="btn btn-info" role="button">Fortryd</a>
            <button type="submit" style="margin:5px;margin-top:6px;float:right" class="btn btn-info">Opdater samling</button>
              
            </div>
        
            </form>
      
          
            
           

            @else
            <!-- THIS SECTION IS FOR ADDING A NEW USERCOMIC IF USER NOT HAS IT -->
               
              <div class="col-lg-9" >
              @if ( $userComicRecordExist )
                <!-- THIS SECTION IS WHEN USERCOMIC RECORD ALREADY EXISTS AND WE ONLY WANT to UPDATE EXISTING RECORD IN DB-->
                <form method="POST" action="/usercomic/{{$comic->id}}">   
                {{ method_field('PUT') }}  {{ csrf_field() }} 
                <input type="hidden" name="status" value=1> 
              @else 
                <!-- THIS SECTION IS FOR ADDING A BRAND NEW USERCOMIC RECORD IN DB-->
                <form method="POST" action="/usercomic">
                {{ csrf_field() }}
                <input type="hidden" name="status" value=1> 
              @endif
                <input type="hidden" name="comic_id" value="{{ $comic->id}}">
                <div class="row">
                  <div class="col-lg-5">  
                    <label for="condition">Stand</label>
                      <select class="form-control" id="condition" name="condition">
                        
                        <option value=100>(10.0) - Gem Mint</option>
                        <option value=99>(9.9) - Mint  </option>
                        <option value=98>(9.8) - Near Mint/Mint</option>
                        <option value=96>(9.6) - Near Mint+</option>
                        <option value=94>(9.4) - Near Mint</option>
                        <option value=92>(9.2) - Near Mint-</option>
                        <option value=90>(9.0) - Very Fire/Near Mint</option>
                        <option value=85>(8.5) - Very Fine+</option>
                        <option value=80>(8.0) - Very Fine</option>
                        <option value=75>(7.5) - Very Fine-</option>
                        <option value=70>(7.0) - Fine / Very Fine</option>
                        <option value=60>(6.0) - Fine</option>
                        <option value=55>(5.5) - Fine-</option>
                        <option value=50>(5.0) - Very Good/Fine</option>
                        <option value=45>(4.5) - Very Good+</option>
                        <option value=40>(4.0) - Very Good</option>
                        <option value=35>(3.5) - Very Good-</option>
                        <option value=30>(3.0) - Good/Very Good-</option>
                        <option value=25>(2.5) - Good+</option>
                        <option value=20>(2.0) - Good</option>
                        <option value=18>(1.8) - Good-</option>
                        <option value=18>(1.5) - Fair/Good</option>
                        <option value=18>(1.0) - Fair</option>
                      </select>
                  </div>
                  <div class="col-lg-7">
              
                  </div>  
                </div>

              
                <div class="form-group">
                  <label for="comment">Kommentar</label>
                  <textarea class="form-control" id="comment" name="comment" rows="3">{{ $comic->id}}</textarea>
                </div>
                <a href="{{ action('CollectionController@show',[$collection->id]) }}" style="margin:5px;margin-top:6px;float:right" class="btn btn-info" role="button">Fortryd</a>
                <button type="submit" style="margin:5px;margin-top:6px;float:right" class="btn btn-info">Tilføj til samling</button>
              </div>
            
              
          
              
            </form>
            @endif

        </div>






      </div>
    </div>
  </div>       








@endsection