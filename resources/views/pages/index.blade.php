@extends('layouts.master')

@section('content')

      <div class="contianer-fluid" id="story">
          @include('sections.story')
      </div>
      <div class="container-fluid" id="gallery">
          @include('sections.gallery')
      </div>
      <div class="container-fluid" id="directions">
          @include('sections.directions')
      </div>

@endsection
