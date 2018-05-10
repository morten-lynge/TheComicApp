@extends('layouts.app')

@section('content')
<?php $alphabet = array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","X","Y","Z"); ?>

<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="container-borderDefault">  
	  		<div class="alphabet-container">
					@foreach ($alphabet as $letter)
    				<a href="{{ action('ListCollectionsAlphabeticController@show',$letter) }}"><div class="alphabetbar">{{ $letter }}</div></a>
					@endforeach
				</div>
      </div>
		</div>
	</div> 	  
</div>  


<div class="container">
	<div class="row">
  	<div class="col-lg-12">
			@foreach ($collections as $collection)
			<?php $index= $collection->name[0]; ?>
	    	<div class="container-borderDefault" style="display:inline-block">
          <h5>{{ $collection->name }}</h5>
          <a href="{{ action('CollectionController@show',[$collection->id]) }}"><img src="{{ asset('images/collections/thumb/' .$index.'/'. $collection->thumb) }}" class="thumb-size"/></a>
        </div>   
			@endforeach
		</div>			
	</div>	
</div>

@endsection