@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="container-alphabetbar">  
        <div style="text-align:center"> 
          <h2>{{$comic->title}}</h2>
        </div>
      </div>
    </div>  
</div>  


<!-- Since PUT is not supported in html use this -->
<form method="POST" action="/comics/{{$comic->id}}">  
{{ method_field('PUT') }}
{{ csrf_field() }}

<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="container-borderforImagAndText">
        <!-- Row with serie and serienumber -->
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="serie">Serie</label>
              <input type="text" class="form-control" id="serie" name="serie" value="{{$comic->serie}}">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="serienumber">Serie Nummer</label>
              <input type="text" class="form-control" id="serie" name="serienumber" value="{{$comic->serienumber}}">
            </div>
          </div>
        </div>
        <!-- Row with main title and sub title -->
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="title">Hoved Titel</label>
              <input type="text" class="form-control" id="title" name="title" value="{{$comic->title}}">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="subtitle">Under Titel</label>
              <input type="text" class="form-control" id="subtitle" name="subtitle" value="{{$comic->subtitle}}">
            </div>
          </div>
        </div>
        <!-- Row with writer and additional_writers -->
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="writer">Forfatter</label>
              <input type="text" class="form-control" id="writer" name="writer" value="{{$comic->writer}}">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="additional_writers">Andre Forfattere</label>
              <input type="text" class="form-control" id="additional_writers" name="additional_writers" value="{{$comic->additional_writers}}">
            </div>
          </div>
        </div>
        <!-- Row with translator -->
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="translator">Oversætter</label>
              <input type="text" class="form-control" id="translator" name="translator" value="{{$comic->translator}}">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              
           
            </div>
          </div>
        </div>
        <!-- Row with publisher and publishing_year -->
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="publisher">Udgivelses Forlag</label>
              <select class="form-control" id="publisher" name="publisher">
                 <option value="{{$comic->publisher}}" selected>{{$comic->publisher}}</option>
                 <option value="Arboris">Arboris</option>
                 <option value="Carlsen">Carlsen</option>
                 <option value="Carlsen Comics">Carlsen Comics</option>
                 <option value="Cobolt">Cobolt</option>
                 <option value="Donovan Comics">Donovan Comics</option>
                 <option value="Egmont">Egmont</option>
                 <option value="Faraos Cigarer">Faraos Cigarer</option>
                 <option value="G. Floy Studio">G. Floy Studio</option>
                 <option value="Illustrationsforlaget">Illustrationsforlaget</option>
                 <option value="Interpresse">Interpresse</option>
                 <option value="Runepress">Runepress</option>
                 <option value="Zoom">Zoom</option>
        </select>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="publishing_year">Udgivelses År</label>
              <input type="text" class="form-control" id="publishing_year" name="publishing_year" value="{{$comic->publishing_year}}">
            </div>
          </div>
        </div>
        <!-- Row with major_release and minor_release -->
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="major_release">Udgave</label>
              <input type="text" class="form-control" id="major_release" name="major_release" value="{{$comic->major_release}}">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="minor_release">Oplag</label>
              <input type="text" class="form-control" id="minor_release" name="minor_release" value="{{$comic->minor_release}}">
            </div>
          </div>
        </div>
        <!-- Row with pages and size -->
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="pages">Sideantal</label>
              <input type="text" class="form-control" id="pages" name="pages" value="{{$comic->pages}}">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="size">Format</label>
              <select class="form-control" id="size" name="size">
                <option value="{{$comic->size}}">{{$comic->size}}</option>
                <option value="220 x 295 - (Standard Softcover)">220 x 295 - (Standard Softcover)</option>
                <option value"225 x 296 - (Standard Hardcover)">225 x 296 - (Standard Hardcover)</option>
                <option value="237 x 317 - (Large Hardcover)">237 x 317 - (Large Hardcover)</option>
                <option value="163 x 224 - (Pocketsize)">163 x 224 - (Pocketsize)</option>
              </select>
            </div>
          </div>
        </div>
         <!-- Row with cover and coloring -->
         <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="major_release">Udgave</label>
              <input type="text" class="form-control" id="major_release" name="major_release" value="{{$comic->major_release}}">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="minor_release">Oplag</label>
              <input type="text" class="form-control" id="minor_release" name="minor_release" value="{{$comic->minor_release}}">
            </div>
          </div>
        </div>

      </div>   
    </div>  
  </div>
</div>    

<div class="row">
 
  <div class="col-md-6">
  
    
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Update</button>
    </div>  
  </div>  

</div>


</form>
@endsection