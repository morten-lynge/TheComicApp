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
              <form method="POST" action="/usercomic/{{$comic->id}}">   
              {{ method_field('PUT') }}  {{ csrf_field() }} 
              <input type="hidden" name="comic_id" value="{{ $comic->id}}">           
                <div style="">

               
              <div class="row">
                <div class="col-lg-8">  
                <label for="wanted">Hvor mange stjerner skal denne tegneserie have ?</label>
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
                <div class="col-lg-4">
             
                
                </div>  
              </div>
            </div>
            <div class="form-group">
              <label for="comment">Skriv anmeldelse</label>
                <textarea class="form-control" id="comment" name="comment" value="" rows="8">{{$usercomic->comment}}</textarea>
            </div>
            <a href="{{ action('CollectionController@show',[$collection->id]) }}" style="margin:5px;margin-top:6px;float:right" class="btn btn-info" role="button">Fortryd</a>
            <button type="submit" style="margin:5px;margin-top:6px;float:right" class="btn btn-info">Opdater samling</button>
              
            </div>
        
            </form>
      
          
            
           

          
            @endif

        </div>






      </div>
    </div>
  </div>       


              
@endsection