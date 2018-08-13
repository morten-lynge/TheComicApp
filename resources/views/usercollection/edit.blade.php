@extends('layouts.app', ['active_navbar_item' => 'Min_Samling'])

<?php 
function IsChecked($value, $id)
{
  if ($value == $id)
     echo 'checked';
  
}
?>

@section('content')
<br>
<!-- Main container for page -->
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <!-- container for inputform -->  
      <div class="container-inputForms">
        <div class="container-header" style="margin-bottom:10px">
          <h4>{{ $collection->name }}</h4>
        </div>
        <div class="container">
          <!-- Left side container-->
          <div class="row" style="margin:0px">
            <div class="col-lg-4" style="padding:0px">
              <div style="margin-right:10px;margin-bottom:10px; ">
              <img src="{{ asset('images/collections/main/' .$collection->name[0].'/'. $collection->main_image) }}" class="img-fluid" style="width:100%;max-height:100%"/>
              </div>
            </div>
            <!-- Left side container-->
            <div class="col-lg-8" >
            <form method="POST" action="/usercollections/{{$collection->id}}">   
              {{ method_field('PUT') }}  {{ csrf_field() }} 
              <input type="hidden" name="collection_id" value="{{ $collection->id}}">           
              <div style="">
                <div class="row" style="margin-left:0px">
                  <div class="col-lg-12">
                    <h5 style="float:left;display:inline-block;line-height:2.6">Giv din anmeldelse af denne samling: </h5>
                    {{$usercollection->popularity}} 
                    
                    <ul class="rate-area">
                    <input type="hidden" name="rating" value="0">
                    <input type="radio" id="6-star" name="rating" value="6" <?php Ischecked($usercollection->popularity,6);?>/><label for="6-star" title="Amazing">6 stars</label>
                    <input type="radio" id="5-star" name="rating" value="5" <?php Ischecked($usercollection->popularity,5);?>/><label for="5-star" title="Very Good">5 stars</label>
                    <input type="radio" id="4-star" name="rating" value="4" <?php Ischecked($usercollection->popularity,4);?>/><label for="4-star" title="Good">4 stars</label>
                    <input type="radio" id="3-star" name="rating" value="3" <?php Ischecked($usercollection->popularity,3);?>/><label for="3-star" title="Average">3 stars</label>
                    <input type="radio" id="2-star" name="rating" value="2" <?php Ischecked($usercollection->popularity,2);?>/><label for="2-star" title="Not Good">2 stars</label>
                    <input type="radio" id="1-star" name="rating" value="1" <?php Ischecked($usercollection->popularity,1);?>/><label for="1-star" title="Bad">1 star</label>
                    </ul>
                  </div>
                </div>
              </div>
              <button type="submit" style="margin:5px;margin-top:6px;float:right" class="btn btn-info">Opdater samling</button>
            </form>
            </div>
          </div>
        </div>


    </div>
  </div>
</div>  

@endsection

