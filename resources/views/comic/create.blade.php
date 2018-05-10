@extends('layouts.app')

@section('content')
<div class="container">
	<h1> Create new comic</h1>
  <form method="POST" action="/comics">
  {{ csrf_field() }}

	<div class="row">
    <div class="col-md-4">
      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title">
      </div>
      <div class="form-group">
        <label for="writer">Forfatter</label>
        <input type="text" class="form-control" id="writer" name="writer">
      </div> 
      <div class="form-group">
        <label for="artist">Tegner</label>
        <input type="text" class="form-control" id="artist" name="artist">
      </div>

      <div class="form-group">
        <label for="frontpage">Frontpage Image</label>
        <input type="text" class="form-control" id="frontpage" name="frontpage">
      </div>
      <div class="form-group">
        <label for="publisher">Forlag:</label>
        <select class="form-control" id="publisher" name="publisher">
        <option></option>
          <option>Arboris</option>
          <option>Carlsen</option>
          <option>Carlsen Comics</option>
          <option>Cobolt</option>
          <option>Donovan Comics</option>
          <option>Egmont</option>
          <option>Faraos Cigarer</option>
          <option>G. Floy Studio</option>
          <option>Illustrationsforlaget</option>
          <option>Interpresse</option>
          <option>Runepress</option>
          <option>Zoom</option>
        </select>
      </div>
    </div>

    <div class="col-md-4">
    <div class="form-group">
        <label for="serie">Serie</label>
        <input type="text" class="form-control" id="serie" name="serie">
      </div>
     
      <div class="form-group">
        <label for="additional_writers">Andre Forfattere</label>
        <input type="text" class="form-control" id="additional_writers" name="additional_writers">
      </div>
      
      <div class="form-group">
        <label for="additional_artists">Andre Tegnere</label>
        <input type="text" class="form-control" id="additional_artists" name="additional_artists">
      </div>
      <div class="form-group">
        <label for="translator ">Oversætter</label>
        <input type="text" class="form-control" id="translator" name="translator">
      </div>
    </div>
    
    <div class="col-md-2">
      <div class="form-group">
        <label for="serienumber">Serie Nummer</label>
        <input type="number" class="form-control" id="serienumber" name="serienumber">
      </div>
      <div class="form-group">
        <label for="published_year">Udgivelses år</label>
        <input type="number" class="form-control" id="published_year" name="published_year">
      </div>
      
      
      <div class="form-group">
        <label for="coloring">Farvelæggelse:</label>
        <select class="form-control" id="coloring" name="coloring">
        <option></option>
          <option>Farver</option>
          <option>Sort/hvid</option>
        </select>
      </div>
      <div class="form-group">
        <label for="major_release">Udgave</label>
        <input type="text" class="form-control" id="major_release" name="major_release">
      </div>
      <div class="form-group">
        <label for="minor_release">Oplag</label>
        <input type="text" class="form-control" id="minor_release" name="minor_release">
      </div>
    </div>

    <div class="col-md-2">
      <div class="form-group">
        <label for="pages">Side antal</label>
        <input type="number" class="form-control" id="pages" name="pages">
      </div>
      <div class="form-group">
        <label for="size">Mål:</label>
        <select class="form-control" id="size" name="size">
          <option></option>
          <option>220 x 295 - (Standard Softcover)</option>
          <option>225 x 296 - (Standard Hardcover)</option>
          <option>237 x 317 - (Large Hardcover)</option>
          <option>163 x 224 - (Pocketsize) </option>
        </select>
      </div>
      <div class="form-group">
        <label for="cover">Cover:</label>
        <select class="form-control" id="cover" name="cover">
          <option></option>
          <option>Softcover</option>
          <option>Hardcover</option>
        </select>
      </div>
    </div>
  </div>

  
  
 
  

  

  
  



  <div class="form-group">
    <label for="resume">Resume</label>
    <textarea id="resume" name="resume" class="form-control"></textarea>
  </div>
  <div class="form-group">
  	<button type="submit" class="btn btn-primary">Publish</button>
  </div>	
</form>

@include('layouts.errors')

</div>
@endsection