@extends('layouts.app', ['active_navbar_item' => 'Min_Samling'])

<?php
  function DisplayLikes($value)
  {
    switch ($value) {
      case 0:
        echo '<div><span class= "stars-container stars-0">★★★★★★</span></div>';
        break;
      case 10:
        echo '<div><span class= "stars-container stars-10">★★★★★★</span></div>';
        break;
      case 20:
        echo '<div><span class= "stars-container stars-20">★★★★★★</span></div>';
        break;
      case 30:
        echo '<div><span class= "stars-container stars-30">★★★★★★</span></div>';
        break;
      case 40:
        echo '<div><span class= "stars-container stars-40">★★★★★★</span></div>';
        break;
      case 50:
        echo '<div><span class= "stars-container stars-50">★★★★★★</span></div>';
        break;
      case 60:
        echo '<div><span class= "stars-container stars-60">★★★★★★</span></div>';
        break;
      case 70:
        echo '<div><span class= "stars-container stars-70">★★★★★★</span></div>';
        break;
      case 80:
        echo '<div><span class= "stars-container stars-80">★★★★★★</span></div>';
        break;
      case 90:
        echo '<div><span class= "stars-container stars-90">★★★★★★</span></div>';
        break;
      case 100:
        echo '<div><span class= "stars-container stars-100">★★★★★★</span></div>';
        break;      
    }    
  }
?>


@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="container-topbar">  
        <h1>{{ "- $collection->name -" }}</h1>
      </div>
    </div>
  </div>  
</div>  

<div class="container">
  <div class="row">
    <div class="col-lg-9 col-image">
        <div class="container-borderforImagAndText" style="position:relative;">
        
          <img src="{{ asset('images/collections/main/' .$index.'/'. $collection->main_image) }}" class="img-fluid" style="width:100%;max-height:100%"/>
          <div style="position:absolute;top:58%;left:78%;width:100%;z-index:1;">
            <img src="{{ asset('images/awards/GotThemAll_Badge_Gold_v4.png') }}" style="width:25%;" />
          </div> 
          
       
        </div>  
      </div>  
      

   


    <div class="col-lg-3 col-text">
      <div class="container-borderforText">  
          
          @if ( Auth::check() && Auth::user()->isAdmin() )
            <a href="{{ action('CollectionController@edit',[$collection->id]) }}" class="btn btn-info" role="button">Edit</a>
          @else
          <div style="display:inline-block;margin-bottom:10px; margin-right:10px">
            <h4>Valgte Indstillinger</h4>
          </div>  
          <br>
           
              <div class="checkbox">
                <label><input style="margin-right:5px" type="checkbox" checked=checked value="">Vis tegneserier jeg har.</label>
              </div>
              <div class="checkbox">
                <label ><input style="margin-right:5px" type="checkbox" value="">Vis tegneserier jeg efterlyser.</label>
              </div>
              <!--<div class="checkbox">
                <label><input style="margin-right:5px" type="checkbox" value="">Vis alle tegneserier.</label>
              </div>-->
             
              <div class="checkbox">
                <label><input style="margin-right:5px" type="checkbox" checked=checked value="">Vis kun 1. oplag.</label>
              </div>
              <div class="checkbox">
                <label><input style="margin-right:5px" type="checkbox" value="">Vis kun 1.udgave.</label>
              </div>
              
              <!--<div class="checkbox">
                <label><input style="margin-right:5px" type="checkbox" value="">Vis alle oplag.</label>
              </div> -->
              <hr style="margin-top:5px">
              <div style="margin-bottom:10px;">
                <div style="display:inline-block;margin-right:5px">
                  <h4>Popularitet</h4>
                </div> 
                <div style="display: inline-block;">
                  <span style="font-size:18px;color: Dodgerblue;">
                    <i class="fas fa-thumbs-up"></i>
                    <i class="fas fa-thumbs-up"></i>
                    <i class="fas fa-thumbs-up"></i>
                    <i class="fas fa-thumbs-up"></i>
                    <i class="fas fa-thumbs-up"></i>
                    <i class="fas fa-thumbs-up"></i>
                  </span>
                </div> 
              </div>  
              <div style="display:inline-block;margin-right:17px">
                <h6>Afgive stemmer:</h6>
              </div>
              <div style="display:inline-block;margin-right:5px">
                  <h6>35</h6>
              </div> 
              <div style="display:inline-block;margin-right:5px">
                <h6>Samlet popularitet:</h6>
              </div>
              <div style="display: inline-block;">
                <span style="font-size:14px;color: Dodgerblue;">
                  <i class="fas fa-thumbs-up"></i>
                  <i class="fas fa-thumbs-up"></i>
                  <i class="fas fa-thumbs-up"></i>
                  <i class="fas fa-thumbs-up"></i>
                  
                </span>
              </div>   
              <hr style="margin-top:5px">
              <div style="display:inline-block;margin-bottom:10px; margin-right:10px">
            <h4>Bedrifter</h4>
          </div>  
          <br>
           
              <a href="{{ action('UserCollectionController@edit',[$collection->id]) }}" class="btn btn-info" role="button" style="margin-right:15px;margin-bottom:20px;float:right;position:absolute;right:0;bottom:0;z-index:1;">Rediger Indstillinger</a>
            
           
           
          @endif
        </div>  
      </div> 

    </div>
  
  </div>  

<!--************************************************************************************-->
<!--*  This section is for collections that contains sub-collections                   *-->
<!--************************************************************************************-->
 @if ($collection->contain_subcollection)
 
 <?php $subcollections = $collection->getSubcollections(); ?>
 <div class="container">
  <div class="row">
  	<div class="col-lg-12">
	  @foreach ($subcollections as $subcollection)
      <?php $index=$subcollection->name[0]; ?>
	    <div class="container-borderDefault" style="display:inline-block">
          <h6>
          <a href="{{ action('CollectionController@show',[$subcollection->id]) }}">{{ $subcollection->name }}</a>
          </h6>
         <a href="{{ action('CollectionController@show',[$subcollection->id]) }}"><img src="{{ asset('images/collections/thumb/' .$index.'/'. $subcollection->thumb) }}" class="thumb-size"/></a>
        </div>   
      @endforeach
	  </div>  
  </div>
</div>
 @endif 
<!--************************************************************************************-->



<div class="container">
  <div class="row">
    <div class="col-lg-12">
      @foreach ($collection->comics as $comic)
        <?php $userHasComic = $comic->userHasIt(Auth::id()); 
              $userWantsComic = $comic->userWantsIt(Auth::id());?> 
    
        <div class="container-borderDefault container-width" style="display:inline-block;">
        
        @if ( $userHasComic )
        
        <?php 
        

        $image="images/awards/shiny-diamond-workinprogess_10_0_v6.png"; ?>
        <div class="container-header" style="position:relative;" ><h4>{{ 'Nr. '.$comic->serienumber. '  -  '.$comic->subtitle  }}</h4> 
          <!--<div style="position:relative;top:-30px;z-index:10;width:30px;margin-left:auto;margin-right:10px"> -->
            <!-- <img src="{{ asset('images/icons/check.png') }}" width="30" height="25" alt="ok"> -->
            <div style="position:absolute;top:-1px;left:85%;width:100%;z-index:1;">
            <img src="{{ asset($comic->usercomic->getConditionImage()) }}" style="width:13%;" />
            </div>
           
          <!--</div> -->
        </div>

        <div class="container-body">
        <div class="row">
          <div class="col-lg-4" style="padding-right:10px" >
            <div style="">
              <a href="{{ action('ComicController@show',[$comic->id]) }}">
                <img src="{{ asset('images/frontpages/' .$index.'/'. $comic->frontpage) }}" class="img-fluid" style="max-height:240px;border:1px solid rgb(151, 151, 151)"/></a>
            </div>  
          </div>
          <div class="col-lg-8" style="padding-left:0px">
            <div style="border:1px solid rgb(201, 201, 201);border-radius:4px;padding:5px;margin-right:5px">
              <div style="width:65px;display:inline-block">
                <h6>{{ 'Forfatter:' }}</h6>
                <h6>{{ 'Tegner:' }}</h6>
                <h6>{{ 'Forlag:' }}</h6>
                <h6>{{ 'Udgivet:' }}</h6>
                <h6>{{ 'Stand:' }}</h6>
              </div>   
              <div style="display:inline-block">
                <h6>{{  $comic->writer}}</h6>
                <h6>{{  $comic->artist}}</h6>
                <h6>{{  $comic->publisher}}</h6>
                <h6>{{  $comic->publishing_year.' , '. $comic->major_release.' udgave , '. $comic->minor_release.' oplag'}}</h6>
                <h6>{{ $comic->usercomic->getConditionName() }}</h6>
              </div>
            </div>
            @if ( $userWantsComic  )
            <fieldset style="margin-right:5px"><legend>Efterlysning</legend>
              <h6 style="display:inline-block">{{ $comic->usercomic->getWantedTextString() }}</h6>
            </fieldset>
            @endif
          </div>
        </div>
        </div> 
        
        
        <div class="container-footer">
        <div class="row">
        <div class="col-lg-12">  
          <div>
            
            <h6 style="width:140px;display:inline-block">{{ 'Anmeldelser: '.$comic->votes }}</h6>
            <?php if ($comic->total_likes > 0 && $comic->votes > 0) 
                    $percent  = round(100*($comic->total_likes / $comic->votes)/6,-1);
                  else
                  $percent = 0; ?>
            <h6 style="display:inline-block">{{ 'Samlet anmeldelse:' }}</h6>
            <h6 style="display:inline-block">      <?php DisplayLikes($percent); ?> </h6>
          </div>  
        </div>
        </div>
        </div>   
            
       <!-- ******************************************************************************************* -->
       <!--   If user do not have comic                                                                 -->
       <!-- ******************************************************************************************* -->   
        @else
        <div class="container-header"><h4>{{ 'Nr. '.$comic->serienumber. '  -  '.$comic->subtitle  }}</h4> 
          <div style="position:relative;top:-30px;z-index:10;width:25px;margin-left:auto;margin-right:10px">
            <!-- <img src="{{ asset('images/icons/missing.png') }}" width="25" height="25" alt="missing"> -->
          </div> 
        </div>

        <div class="container-body">
        <div class="row">
          <div class="col-lg-4" style="padding-right:10px" >
          
            <div style="position:relative;">
              <a href="{{ action('ComicController@show',[$comic->id]) }}">
                <img src="{{ asset('images/frontpages/' .$index.'/'. $comic->frontpage) }}" class="img-fluid" style="filter: grayscale(1);-webkit-filter: grayscale(1);max-height:240px;opacity:0.3;border:1px solid rgb(151, 151, 151);"/></a>
                <div style="position:absolute;top:0px;left:0px;width:100%;height:100%;"><h3 style="text-align:center;padding-top:50%;">MANGLER</h3></div>     
            </div>  
          </div>
          <div class="col-lg-8" style="padding-left:0px">
            <div style="border:1px solid rgb(201, 201, 201);border-radius:4px;padding:5px;margin-right:5px">
              <div style="width:65px;display:inline-block">
                <h6>{{ 'Forfatter:' }}</h6>
                <h6>{{ 'Tegner:' }}</h6>
                <h6>{{ 'Forlag:' }}</h6>
                <h6>{{ 'Udgivet:' }}</h6>
                <h6>{{ 'Stand:' }}</h6>
              </div>   
              <div style="display:inline-block">
                <h6>{{ $comic->writer}}</h6>
                <h6>{{ $comic->artist}}</h6>
                <h6>{{ $comic->publisher}}</h6>
                <h6>{{ $comic->publishing_year.' , '. $comic->major_release.' udgave , '. $comic->minor_release.' oplag'}}</h6>
                <h6>&nbsp</h6>
              </div>
            </div>
            @if ( $userWantsComic  )
            <fieldset style="margin-right:5px"><legend>Efterlysning</legend>
              <h6 style="display:inline-block">{{ $comic->usercomic->getWantedTextString() }}</h6>
            </fieldset>
            @endif
          </div>
        </div>
        </div> 
     
        <div class="container-footer">
        <div class="row">
        <div class="col-lg-12">  
          <div>
            
            <h6 style="width:150px;display:inline-block">{{ 'Anmeldelser: '.$comic->votes }}</h6>
            <?php if ($comic->total_likes > 0) 
                    $percent  = round(100*($comic->total_likes / $comic->votes)/6,-1);
                  else
                  $percent = 0; ?>
            <h6 style="display:inline-block">{{ 'Samlet anmeldelse:' }}</h6>
            <h6 style="display:inline-block">      <?php DisplayLikes($percent); ?> </h6>
          </div>  
        </div>
        </div>
        </div>   
      @endif     
        
     
          @if ( Auth::check() && Auth::user()->isAdmin() ) 
            <a href="{{ action('ComicController@edit',[$comic->id]) }}" style="margin:5px;margin-top:6px;float:right" class="btn btn-info" role="button">Edit</a>
          @endif  
          @if ( $userWantsComic)
            <a href="{{ action('ComicController@show',[$comic->id]) }}" style="margin:5px;margin-top:6px;float:right" class="btn btn-info" role="button">Mere Info</a>
            <a href="{{ action('UserComicController@removeInquiry',[$comic->id]) }}" style="margin:5px;margin-top:6px;float:right" class="btn btn-info" role="button">Fjern Efterlysning</a>
            <a href="{{ action('UserComicController@edit',[$comic->id]) }}" style="margin:5px;margin-top:6px;float:right" class="btn btn-info" role="button">Rediger</a>
          @elseif ( $userHasComic ) 
            <a href="{{ action('ComicController@show',[$comic->id]) }}" style="margin:5px;margin-top:6px;float:right" class="btn btn-info" role="button">Mere Info</a>
            <a href="{{ action('ReviewComicController@edit',[$comic->id]) }}" style="margin:5px;margin-top:6px;float:right" class="btn btn-info" role="button">Anmeld</a>
            <a href="{{ action('UserComicController@edit',[$comic->id]) }}" style="margin:5px;margin-top:6px;float:right" class="btn btn-info" role="button">Rediger</a> 
          @else
            <a href="{{ action('ComicController@show',[$comic->id]) }}" style="margin:5px;margin-top:6px;float:right" class="btn btn-info" role="button">Mere Info</a>
            <a href="{{ action('UserComicController@postInquiry',[$comic->id]) }}" style="margin:5px;margin-top:6px;float:right" class="btn btn-info" role="button">Efterlys</a>
            <a href="{{ action('UserComicController@edit',[$comic->id]) }}" style="margin:5px;margin-top:6px;float:right" class="btn btn-info" role="button">Tilføj</a>
          @endif   
         
         
          


         
      </div>   
      @endforeach
    </div>  
  </div>
</div>
  
      

</div>
@endsection
