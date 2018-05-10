@extends('layouts.app')

@section('content')
<div class="container">
   <h2>{{$comic->title}}</h2>
  <div class="body">{{ $comic->serienumber}}. {{ $comic->subtitle}}</div>
</div>
@endsection


    
 
