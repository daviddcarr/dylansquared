@extends('layouts.master')

@section('content')

<div class="content">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-8 col-xl-6">
            <main role="main" class="inner cover">
                @include('partials.rsvp-form')
            </main>
        </div>
    </div>
</div>
@endsection
