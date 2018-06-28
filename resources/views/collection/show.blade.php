@extends('layouts.app', ['active_navbar_item' => 'Min_Samling'])

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
        <div class="container-borderforImagAndText">
          <img src="{{ asset('images/collections/main/' .$index.'/'. $collection->main_image) }}" class="img-fluid" style="width:100%;max-height:100%"/>
        </div>  
      </div>  
      
      <div class="col-lg-3 col-text">
        <div class="container-borderforImagAndText">  
          
          @if ( Auth::check() && Auth::user()->isAdmin() )
            <a href="{{ action('CollectionController@edit',[$collection->id]) }}" class="btn btn-info" role="button">Edit</a>
          @else
          <div>
            <img src="{{ asset('images/icons/settings01.png') }}" width="35" height="30" alt="ok">
            <h4 style="display: inline-block;">Visnings Indstillinger</h4>
          </div>  
          <hr>
            <div style="margin:5px">
              <div class="checkbox">
                <label><input style="margin-right:5px" type="checkbox" checked=checked value="">Vis tegneserier jeg har.</label>
              </div>
              <div class="checkbox">
                <label ><input style="margin-right:5px" type="checkbox" value="">Vis tegneserier jeg efterlyser.</label>
              </div>
              <div class="checkbox">
                <label><input style="margin-right:5px" type="checkbox" value="">Vis alle tegneserier.</label>
              </div>
              <hr>
              <div class="checkbox">
                <label><input style="margin-right:5px" type="checkbox" checked=checked value="">Vis 1. oplag.</label>
              </div>
              <div class="checkbox">
                <label><input style="margin-right:5px" type="checkbox" value="">Vis 2.oplag.</label>
              </div>
              <div class="checkbox">
                <label><input style="margin-right:5px" type="checkbox" value="">Vis 3 oplag.</label>
              </div>  
              <div class="checkbox">
                <label><input style="margin-right:5px" type="checkbox" value="">Vis alle oplag.</label>
              </div>
              <hr>
              <a href="{{ action('CollectionController@index') }}" class="btn btn-info" role="button">Husk Indstillinger</a>
              
            </div>
           
          @endif
        </div>  
      </div> 

    </div>
  
  </div>  



  

<!-- <div class="container">
  <?php echo nl2br($collection->description); ?>
</div> -->

<div class="container">
  <div class="row">
    <div class="col-lg-12">
      @foreach ($collection->comics as $comic)
        <?php $userHasComic = $comic->userHasIt(Auth::id()); 
              $userWantsComic = $comic->userWantsIt(Auth::id());?> 
    
        <div class="container-borderDefault container-width" style="display:inline-block;">
        
        @if ( $userHasComic )
        
        <div class="container-header"><h4>{{ 'Nr. '.$comic->serienumber. '  -  '.$comic->subtitle  }}</h4> 
          <div style="position:relative;top:-30px;z-index:10;width:30px;margin-left:auto;margin-right:10px">
            <img src="{{ asset('images/icons/check.png') }}" width="30" height="25" alt="ok">
          </div> 
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
            
            <h6 style="width:150px;display:inline-block">{{ 'Anmeldelser:' }}</h6>
            <h6 style="width:180px;display:inline-block">{{ 'Samlet anmeldelse:' }}</h6>
          </div>  
        </div>
        </div>
        </div>   
            

        @else
        <div class="container-header"><h4>{{ 'Nr. '.$comic->serienumber. '  -  '.$comic->subtitle  }}</h4> 
          <div style="position:relative;top:-30px;z-index:10;width:25px;margin-left:auto;margin-right:10px">
            <img src="{{ asset('images/icons/missing.png') }}" width="25" height="25" alt="missing">
          </div> 
        </div>

        <div class="container-body">
        <div class="row">
          <div class="col-lg-4" style="padding-right:10px" >
          
            <div style="position:relative;">
              <a href="{{ action('ComicController@show',[$comic->id]) }}">
                <img src="{{ asset('images/frontpages/' .$index.'/'. $comic->frontpage) }}" class="img-fluid" style="max-height:240px;opacity:0.3;border:1px solid rgb(151, 151, 151);"/></a>
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
      <!--  <div class="container-header"><h4>{{ 'Nr. '.$comic->serienumber. '  -  '.$comic->subtitle  }}</h4>  
          <div style="position:relative;top:-30px;float:right;z-index:1;">
            <img src="{{ asset('images/icons/missing.png') }}" width="25" height="25" alt="missing">
          </div>
        </div>

        <div class="container-body">
          <div style="margin:5px;float:left">
            <div style="width:150px;height:200px;clear"  
              <a href="{{ action('ComicController@show',[$comic->id]) }}">
                <img src="{{ asset('images/frontpages/' .$index.'/'. $comic->frontpage) }}" class="img-fluid" style="position:absolute;border:1px solid black;opacity:0.3;max-height:240px;"></a>
                  <div style="position:relative;top:100px;left:10px"><h3>MANGLER</h3></div>  
            </div>
          </div>  
          <div><h6 style="width:65px;display:inline-block">{{ 'Forfatter' }}</h6><h6 style="display:inline-block">{{  $comic->writer}}</h6></div>
          <div><h6 style="width:65px;display:inline-block">{{ 'Tegner' }}</h6><h6 style="display:inline-block">{{  $comic->artist}}</h6></div>
          <div><h6 style="width:65px;display:inline-block">{{ 'Forlag' }}</h6><h6 style="display:inline-block">{{  $comic->publisher}}</h6></div>
          <div><h6 style="width:65px;display:inline-block">{{ 'Udgivet' }}</h6><h6 style="display:inline-block">{{  $comic->publishing_year.' , '. $comic->major_release.' udgave , '. $comic->minor_release.' oplag'}}</h6></div>
          @if ($comic->userWantsIt(Auth::id()))
          <div><h6 style="display:inline-block">{{ $comic->usercomic->getWantedTextString() }}</h6></div>
          @endif
        </div>-->
        <div class="container-footer">
        <div class="row">
        <div class="col-lg-12">  
          <div>
            
            <h6 style="width:150px;display:inline-block">{{ 'Anmeldelser:' }}</h6>
            <h6 style="width:180px;display:inline-block">{{ 'Samlet anmeldelse:' }}</h6>
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
