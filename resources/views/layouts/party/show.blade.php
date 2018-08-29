@extends('layouts.master')

@section('content')

    <div class="container my-5">
        <div class="row">
            @if ($party->photo)
            <div class="col-12 col-md-4">

                    <img src="{{ $party->photo }}" class="img-fluid" />
            </div>
            @endif
            <div class="col-12 col-md-8 text-left">
                <h2>{{ $party->name }}</h2>
                <p>
                    {{ $party->location }}
                </p>
                <p>
                    {{ $party->groom }}
                </p>
                <p>
                    {{ $party->about }}
                </p>
            </div>
        </div>
    </div>

@endsection
