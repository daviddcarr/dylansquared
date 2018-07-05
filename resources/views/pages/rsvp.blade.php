@extends('layouts.master')

@section('content')

<div class="content mt-5 mb-5">
    <div class="row justify-content-center align-items-center px-3">
        <div class="col-12 col-lg-8 col-xl-6">
            <main role="main" class="inner cover">
                @include('partials.rsvp-form')
            </main>
        </div>
    </div>
</div>
@endsection
