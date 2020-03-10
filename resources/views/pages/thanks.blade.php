@extends('layouts.master')

@section('content')

<div class="container-fluid pt-5">
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6 text-center pt-5">
                @if (@isset($rsvp))
                    <h1>Thanks for RSVPing {{ $rsvp->name }}!</h1>
                    <h2>We can't wait to see you there!</h2>  
                @else 
                    <h1>It seems your passphrase was incorrect.</h1>
                    <h2>Try again?</h2>
                @endisset
                <a href="/" class="btn btn-primary text-center mt-3">Return Home</a>
            </div>
        </div>
    </div>
</div
@endsection