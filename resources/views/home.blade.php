@extends('layouts.app')


@section('content')
<br><br> 
<div class="container">
<div class="row justify-content-center">
 
  <div class="container-borderDefault container-width" >
  <div class="container-header"><h4>Velkommen</h4>    
  </div>
  <div class="container-body">
  
    <div style="margin:10px;width:135px;border:solid 1px rgba(52,58,64,0.4);display:inline-block;vertical-align: top;">
      <img src="{{ asset('images/icons/accountIcon01.jpg') }}" class="img-fluid" style="height:165px;"/>
    </div>
    <div style="margin:8px;display:inline-block;vertical-align: top;">
      <div><h6 style="width:65px;display:inline-block">{{ 'Bruger' }}</h6><h6 style="display:inline-block">{{ Auth::user()->name }}</h6></div>
      <div><h6 style="width:65px;display:inline-block">{{ 'Email' }}</h6><h6 style="display:inline-block">{{ Auth::user()->email }}</h6></div>
      <br>
      <br> 
      <br>
      <br>
      

      <div><h6 style="width:85px;display:inline-block;">{{ 'Sidste login' }}</h6><h6 style="display:inline-block;">{{ '23-02-2018 - 15:30' }}</h6></div>
    </div>
    <hr style="margin:5px">
    <div > 
    
      <a href="{{ action('ComicController@index') }}" style="margin:5px;margin-top:6px;float:right" class="btn btn-info" role="button">Rediger</a>
    </div>
   
  </div>
</div> 
  </div>  
</div>



               
            </div>
        </div>
    </div>
</div>
@endsection
