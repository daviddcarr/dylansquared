@extends('layouts.master')

@section('content')

    <div class="container py-4">
        @if ($rsvps)
            <table class="w-100 border mb-3">
                <tr class="border">
                    <td class="border">
                        <strong>Name</strong>
                    </td>
                    <td class="border">
                        <strong>Email</strong>
                    </td>
                    <td class="border">
                        <strong>Family</strong>
                    </td>
                    <td class="border">
                        <strong>Guest?</strong>
                    </td>
                    <td class="border">
                        <strong>Children</strong>
                    </td>
                    <td class="border">
                        <strong>Song</strong>
                    </td>
                </tr>
                @foreach ($rsvps as $rsvp)
                    <tr class="border">
                        <td class="border">
                            {{ $rsvp->name }}
                        </td>
                        <td class="border">
                            {{ $rsvp->email }}
                        </td>
                        <td class="border">
                            {{ $rsvp->family }}
                        </td>
                        <td class="border">
                            {{ $rsvp->guest }}
                        </td>
                        <td class="border">
                            {{ $rsvp->num_of_children }}
                        </td>
                        <td class="border">
                            {{ $rsvp->song }}
                        </td>
                    </tr>
                @endforeach
            </table>

            <?php

                $totalGuests = count($rsvps);

                foreach ($rsvps as $rsvp) {
                    if ($rsvp->guest == 'yes') {
                        $totalGuests++;
                    }
                    if ($rsvp->num_of_children > 0) {
                        $totalGuests = $totalGuests + $rsvp->num_of_children;
                    }
                }

            ?>

            <table class="w-100">
                <tr>
                    <td class="border">
                        <strong>Total RSVPs Completed</strong>
                    </td>
                    <td class="border">
                        <strong>Total Guests</strong>
                    </td>
                </tr>
                <tr>
                    <td class="border">
                        {{ count($rsvps) }}
                    </td>
                    <td class="border">
                        {{ $totalGuests }}
                    </td>
                </tr>
            </table>
        @else
            <div class="row">
                <div class="col-12 col-md-6">
                    <h3>No Submissions.</h3>
                </div>
            </div>
        @endif
    </div>

@endsection
