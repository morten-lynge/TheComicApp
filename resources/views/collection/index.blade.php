@extends('layouts.app', ['active_navbar_item' => 'Min_Samling'])


<div class="container">
</div>

@section('content')
<div class="container">
<h1>Collections</h1>
		@foreach ($collections as $collection)
			<?php 
				$index=$collection->name[0]; 
				//$char1 = $index[0];
			?>
        	<article>
        		<h2>
        			<a href="{{ action('CollectionController@show',[$collection->id]) }}">{{ $collection->name }}</a>
                </h2>
				<img src="{{ asset('images/collections/thumb/' .$index.'/'. $collection->thumb) }}" />
        		<div class="body">{{ $collection->description}}</div>
        	</article>   
           
        @endforeach
</div>
@endsection