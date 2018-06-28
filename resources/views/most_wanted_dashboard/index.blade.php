@extends('layouts.app', ['active_navbar_item' => 'Efterlysninger'])


<div class="container">
</div>

@section('content')
<div class="container">
<h1>Most Wanted Dashboard</h1>
		@foreach ($usercomics as $usercomic)
		@if ($usercomic->wanted != 0) 
			<?php 
			
				//$char1 = $index[0];
			?>
        	<article>
        		<h2>{{ $usercomic->getComicDetail()->title.' Nr. '.$usercomic->getComicDetail()->serienumber.' '.$usercomic->getComicDetail()->subtitle }}</h2>
						<h2>{{ 'Username. '.$usercomic->getUserDetail()->name }}</h2>
				    <h2>{{ 'Efterlysning. '.$usercomic->getWantedTextString() }}</h2>
        	</article>   
      @endif     
        @endforeach
</div>
@endsection