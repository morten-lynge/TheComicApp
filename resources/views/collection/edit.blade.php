@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="container-alphabetbar">  
        <div class="navigate-back-container"> 
          <a href="{{ action('ListCollectionsAlphabeticController@index') }}"><div class="navigate-back">{{ "Samlet Oversigt" }}</div></a>
          <h2>Collection edit page</h2>
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
          <h1>Noget test</h1>
         
        </div>  
      </div> 

    </div>
  
  </div>  



  

<div class="container"><?php echo nl2br($collection->description); ?></div>
</div>
@endsection