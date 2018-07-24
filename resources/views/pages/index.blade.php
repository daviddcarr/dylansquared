@extends('layouts.master')

@section('content')

    {{-- <div class="nav-item">
        <a href="/rsvp" class="btn btn-lg btn-primary">RSVP</a>
    </div> --}}

    <div class="contianer-fluid" id="Intro">
        @include('sections.intro')
    </div>
    <div class="contianer-fluid" id="story">
        @include('sections.story')
    </div>
    <div class="container-fluid" id="gallery">
        @include('sections.gallery')
    </div>
    <div class="container-fluid px-0 bg-secondary text-white" id="directions">
        @include('sections.directions')
    </div>
    <div class="container-fluid" id="faqs">
        @include('sections.faqs')
    </div>

    <div class="position-fixed" id="back-to-top">
        <i class="material-icons text-red">
            keyboard_arrow_up
        </i>
    </div>

@endsection
