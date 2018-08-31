@extends('layouts.master')

@section('content')

    <div class="container py-4">
        @if ($rsvps)

            <div class="modals">

                @foreach ($rsvps as $rsvp)
                    <div class="modal fade" id="deleteModal{{ $rsvp->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Are you sure you want to delete this?</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <a href="/delete/{{ $rsvp->id }}" class="btn btn-primary">Delete</a>
                          </div>
                        </div>
                      </div>
                    </div>
                @endforeach

            </div>

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
                    <td class="border">

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
                        <td class="border">
                            <button class="btn d-flex align-items-center m-auto" data-toggle="modal" data-target="#deleteModal{{ $rsvp->id }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="red">
                                    <path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM19 4h-3.5l-1-1h-5l-1 1H5v2h14V4z"/>
                                    <path d="M0 0h24v24H0z" fill="none"/>
                                </svg>
                            </button>
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
