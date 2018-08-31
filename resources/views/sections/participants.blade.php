@if ($participants)

<div class="container">
    <h2 class="mb-3 pt-4">Participants</h2>
    <hr class="rainbow" />


    @if ($participants->groomsmenS)
    <h4>Groomsmen (Dylan S)</h4>
    <div class="row justify-content-center py-3">

        @foreach ($participants->groomsmenS as $participant)

            <div class="col-12 col-md-4 col-lg-3 text-center py-2">
                @if ($participant->photo)
                    <img src="{{ $participant->photo }}" class="w-100" />
                @else
                    <img src="/images/placeholder.gif" class="w-100" />
                @endif
                <h4 class="mt-2 mb-0">{{ $participant->name }}</h4>
                <p class="mb-0">{{ $participant->location }}</p>
                @if ($participant->url)
                <p><a href="{{ $participant->url }}">{{ $participant->url }}</a></p>
                @endif
            </div>

        @endforeach

    </div>
    @endif

    @if ($participants->groomsmenC)
    <h4>Groomsmen (Dylan C)</h4>
    <div class="row justify-content-center py-3">

        @foreach ($participants->groomsmenC as $participant)

            <div class="col-12 col-md-4 col-lg-3 text-center py-2">
                @if ($participant->photo)
                    <img src="{{ $participant->photo }}" class="w-100" />
                @else
                    <img src="/images/placeholder.gif" class="w-100" />
                @endif
                <h4 class="mt-2 mb-0">{{ $participant->name }}</h4>
                <p class="mb-0">{{ $participant->location }}</p>
                @if ($participant->url)
                <p><a href="{{ $participant->url }}">{{ $participant->url }}</a></p>
                @endif
            </div>

        @endforeach

    </div>
    @endif

    @if ($participants->parentsS || $participants->parentsC)
    <hr class="rainbow" />
    <div class="row">

        @if ($participants->parentsS)
        <div class="col-12 col-md-6">
            <h4>Parents of Dylan S</h4>
            <div class="row justify-content-center py-3">

                @foreach ($participants->parentsS as $participant)

                    <div class="col-12 col-md-6 text-center py-2">
                        @if ($participant->photo)
                            <img src="{{ $participant->photo }}" class="w-100" />
                        @else
                            <img src="/images/placeholder.gif" class="w-100" />
                        @endif
                        <h4 class="mt-2 mb-0">{{ $participant->name }}</h4>
                        <p class="mb-0">{{ $participant->location }}</p>
                        @if ($participant->url)
                        <p><a href="{{ $participant->url }}">{{ $participant->url }}</a></p>
                        @endif
                    </div>

                @endforeach

            </div>
        </div>
        @endif

        @if ($participants->parentsC)
        <div class="col-12 col-md-6">
            <h4>Parents of Dylan C</h4>
            <div class="row justify-content-center py-3">

                @foreach ($participants->parentsC as $participant)

                    <div class="col-12 col-md-6 text-center py-2">
                        @if ($participant->photo)
                            <img src="{{ $participant->photo }}" class="w-100" />
                        @else
                            <img src="/images/placeholder.gif" class="w-100" />
                        @endif
                        <h4 class="mt-2 mb-0">{{ $participant->name }}</h4>
                        <p class="mb-0">{{ $participant->location }}</p>
                        @if ($participant->url)
                        <p><a href="{{ $participant->url }}">{{ $participant->url }}</a></p>
                        @endif
                    </div>

                @endforeach

            </div>
        </div>
        @endif

    </div>
    @endif

    {{-- @if ($participants->siblingsS)
    <h4>Siblings of Dylan S</h4>
    <div class="row justify-content-center py-3">

        @foreach ($participants->siblingsS as $participant)

            <div class="col-12 col-md-4 col-lg-3 text-center py-2">
                @if ($participant->photo)
                    <img src="{{ $participant->photo }}" class="w-100" />
                @else
                    <img src="/images/placeholder.gif" class="w-100" />
                @endif
                <h4 class="mt-2 mb-0">{{ $participant->name }}</h4>
                <p class="mb-0">{{ $participant->location }}</p>
                @if ($participant->url)
                <p><a href="{{ $participant->url }}">{{ $participant->url }}</a></p>
                @endif
            </div>

        @endforeach

    </div>
    @endif

    @if ($participants->siblingsC)
    <h4>Siblings of Dylan C</h4>
    <div class="row justify-content-center py-3">

        @foreach ($participants->siblingsC as $participant)

            <div class="col-12 col-md-4 col-lg-3 text-center py-2">
                @if ($participant->photo)
                    <img src="{{ $participant->photo }}" class="w-100" />
                @else
                    <img src="/images/placeholder.gif" class="w-100" />
                @endif
                <h4 class="mt-2 mb-0">{{ $participant->name }}</h4>
                <p class="mb-0">{{ $participant->location }}</p>
                @if ($participant->url)
                <p><a href="{{ $participant->url }}">{{ $participant->url }}</a></p>
                @endif
            </div>

        @endforeach

    </div>
    @endif --}}
    @if ($participants->officiants || $participants->bouncers || $participants->rings || $participants->flowers || $participants->photographers || $participants->planners || $participants->caterers)
        <hr class="rainbow" />

        <div class="row justify-content-center py-3">

            @if ($participants->officiants)
                @foreach ($participants->officiants as $participant)

                    <div class="col-6 col-md-3 col-lg-2 text-center py-2">
                        @if ($participant->photo)
                            <img src="{{ $participant->photo }}" class="w-100" />
                        @else
                            <img src="/images/placeholder.gif" class="w-100" />
                        @endif
                        <h4 class="mt-2 mb-0">{{ $participant->name }}</h4>
                        <p class="mb-0">Officiant</p>
                        <p class="mb-0">{{ $participant->location }}</p>
                        @if ($participant->url)
                        <p><a href="{{ $participant->url }}">{{ $participant->url }}</a></p>
                        @endif
                    </div>

                @endforeach
            @endif

            @if ($participants->bouncers)
                @foreach ($participants->bouncers as $participant)

                    <div class="col-6 col-md-3 col-lg-2 text-center py-2">
                        @if ($participant->photo)
                            <img src="{{ $participant->photo }}" class="w-100" />
                        @else
                            <img src="/images/placeholder.gif" class="w-100" />
                        @endif
                        <h4 class="mt-2 mb-0">{{ $participant->name }}</h4>
                        <p class="mb-0">Bouncer</p>
                        <p class="mb-0">{{ $participant->location }}</p>
                        @if ($participant->url)
                        <p><a href="{{ $participant->url }}">{{ $participant->url }}</a></p>
                        @endif
                    </div>

                @endforeach
            @endif

            @if ($participants->rings)
                @foreach ($participants->rings as $participant)

                    <div class="col-6 col-md-3 col-lg-2 text-center py-2">
                        @if ($participant->photo)
                            <img src="{{ $participant->photo }}" class="w-100" />
                        @else
                            <img src="/images/placeholder.gif" class="w-100" />
                        @endif
                        <h4 class="mt-2 mb-0">{{ $participant->name }}</h4>
                        <p class="mb-0">Ring Bearer</p>
                        <p class="mb-0">{{ $participant->location }}</p>
                        @if ($participant->url)
                        <p><a href="{{ $participant->url }}">{{ $participant->url }}</a></p>
                        @endif
                    </div>

                @endforeach
            @endif

            @if ($participants->flowers)
                @foreach ($participants->flowers as $participant)

                    <div class="col-6 col-md-3 col-lg-2 text-center py-2">
                        @if ($participant->photo)
                            <img src="{{ $participant->photo }}" class="w-100" />
                        @else
                            <img src="/images/placeholder.gif" class="w-100" />
                        @endif
                        <h4 class="mt-2 mb-0">{{ $participant->name }}</h4>
                        <p class="mb-0">Flower Child</p>
                        <p class="mb-0">{{ $participant->location }}</p>
                        @if ($participant->url)
                        <p><a href="{{ $participant->url }}">{{ $participant->url }}</a></p>
                        @endif
                    </div>

                @endforeach
            @endif

            @if ($participants->photographers)
                @foreach ($participants->photographers as $participant)

                    <div class="col-6 col-md-3 col-lg-2 text-center py-2">
                        @if ($participant->photo)
                            <img src="{{ $participant->photo }}" class="w-100" />
                        @else
                            <img src="/images/placeholder.gif" class="w-100" />
                        @endif
                        <h4 class="mt-2 mb-0">{{ $participant->name }}</h4>
                        <p class="mb-0">Photographer</p>
                        <p class="mb-0">{{ $participant->location }}</p>
                        @if ($participant->url)
                        <p><a href="{{ $participant->url }}">{{ $participant->url }}</a></p>
                        @endif
                    </div>

                @endforeach
            @endif

            @if ($participants->planners)
                @foreach ($participants->planners as $participant)

                    <div class="col-6 col-md-3 col-lg-2 text-center py-2">
                        @if ($participant->photo)
                            <img src="{{ $participant->photo }}" class="w-100" />
                        @else
                            <img src="/images/placeholder.gif" class="w-100" />
                        @endif
                        <h4 class="mt-2 mb-0">{{ $participant->name }}</h4>
                        <p class="mb-0">Planner</p>
                        <p class="mb-0">{{ $participant->location }}</p>
                        @if ($participant->url)
                        <p><a href="{{ $participant->url }}">{{ $participant->url }}</a></p>
                        @endif
                    </div>

                @endforeach
            @endif

            @if ($participants->caterers)
                @foreach ($participants->caterers as $participant)

                    <div class="col-6 col-md-3 col-lg-2 text-center py-2">
                        @if ($participant->photo)
                            <img src="{{ $participant->photo }}" class="w-100" />
                        @else
                            <img src="/images/placeholder.gif" class="w-100" />
                        @endif
                        <h4 class="mt-2 mb-0">{{ $participant->name }}</h4>
                        <p class="mb-0">Caterer</p>
                        <p class="mb-0">{{ $participant->location }}</p>
                        @if ($participant->url)
                        <p><a href="{{ $participant->url }}">{{ $participant->url }}</a></p>
                        @endif
                    </div>

                @endforeach
            @endif




        </div>


    @endif





</div>

@endif
