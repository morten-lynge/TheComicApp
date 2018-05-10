@extends('layouts.app')

@section('content')
<div class="container">
<h1>Comics</h1>
		@foreach ($comics as $comic)
        	<article>
        		<h2>
        			<a href="{{ action('ComicController@show',[$comic->id]) }}">{{ $comic->title }}</a>
        			
        		</h2>
        		<div class="body">{{ $comic->serienumber}}. {{ $comic->subtitle}}</div>
        	</article>   
           
        @endforeach
</div>
@endsection