@extends('layouts.fullpage')

@section('content')
    @include('sections.hero')
    @include('sections.rsvp')

    {{-- The Story --}}
    @include('sections.story.01-high-school')
    @include('sections.story.02-college')
    @include('sections.story.03-message')
    @include('sections.story.04-reconnecting')
    @include('sections.story.05-dallas')
    @include('sections.story.06-engagement-1')
    @include('sections.story.07-engagement-2')
    @include('sections.story.08-engagement-3')
    @include('sections.story.09-engagement-4')
    @include('sections.story.10-engagement-5')
    @include('sections.story.11-engagement-6')
    @include('sections.story.12-he-said-yes')
    @include('sections.story.13-final')

    {{-- aaaaand scene --}}
    
    {{-- @include('sections.participants') --}}
    @include('sections.location')
    @include('sections.map')

    <div class="position-fixed" id="back-to-top">
        <i class="material-icons text-red">
            keyboard_arrow_up
        </i>
    </div>

@endsection
