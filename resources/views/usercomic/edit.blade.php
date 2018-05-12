@extends('layouts.app')


@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="container-alphabetbar">  
        <div style="text-align:center"> 
          <h2>{{$comic->title}} {{ $comic->serienumber}}  -  {{ $comic->subtitle}}</h2>
         
        </div>
      </div>
    </div>  
</div>


<?php $userHasComic = $comic->userHasIt(Auth::id()); ?>

@if ( $userHasComic  )
<!-- THIS SECTION IS FOR EDITING A USERCOMIC IF USER HAS IT --> 
<form method="POST" action="/usercomic/{{$comic->id}}">   
  {{ method_field('PUT') }}  {{ csrf_field() }}
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="container-borderforImagAndText">
          <button type="submit" style="margin:5px;margin-top:6px;float:right" class="btn btn-info">Opdater</button>
        </div>
      </div>
    </div>
  </div>       
</form>

<!--  THIS SECTION IS DELETING USERCOMIC IF USER HAS IT --> 
<form method="POST" action="/usercomic/{{$comic->id}}">
  {{ method_field('DELETE') }} {{ csrf_field() }}
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="container-borderforImagAndText">            
          <button type="submit" style="margin:5px;margin-top:6px;float:right" class="btn btn-info">Fjern</button>
        </div>
      </div>
    </div>
  </div>       
</form>
@else
<!-- THIS SECTION IS FOR ADDING A USERCOMIC IF USER NOT HAS IT -->
<form method="POST" action="/usercomic">
  {{ csrf_field() }}
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="container-borderforImagAndText">
          <input type="hidden" name="comic_id" value="{{ $comic->id}}">
          <div style="width:25%;float:left;margin-bottom:15px;border: 1px solid red;">
            <img src="{{ asset('images/frontpages/' .$index.'/'. $comic->frontpage) }}" class="img-fluid"/>
          </div>
          
          <div style="width:75%;border: 1px solid red;display:inline-block;padding:0px;margin:0px">

          <div class="form-group">
            <label for="condition">Condition</label>
              <select class="form-control" id="Condition" name="Condition">
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
 
         
          <div class="form-group">
            <label for="comic_id">Efterlysning</label>
              <select class="form-control" id="Wanted" name="Wanted">
                <option value=8>Søger flot samlerstand. Jeg skal have den for enhver pris !</option>
                <option value=7>Søger god samlerstand. Jeg skal have den for enhver pris !</option>
                <option value=6>Søger flot samlerstand. Jeg vil gerne give en god pris</option>
                <option value=5>Søger god samlerstand. Jeg vil gerne give en god pris</option>
                <option value=4>Søger flot samlerstand, men til en rimelig pris</option>
                <option value=3>Søger god samlerstand, men til en rimelig pris</option>
                <option value=2>Søger et læse eksemplar, men til en rimelig pris</option>
                <option value=1>Søger et billigt læse eksemplar. Stand er ikke vigtig</option>
              </select>  
          </div>

          <div class="form-group">
              <label for="comic_id">Kommentar</label>
              <input type="text" class="form-control" id="comic_id" name="comic_id" value="{{ $comic->id}}">
          </div>

          </div>
          <div style="border: 1px solid red;padding:0px;margin:0px">
          <div class="form-group" style="float:right;">
            <button type="submit" class="btn btn-primary">Update</button>
          </div>
          </div>

        </div>
      </div>
    </div>
  </div>         
</form>
@endif



@endsection