@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

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
                                    <td class="border p-2">
                                        <strong>Name</strong>
                                    </td>
                                    <td class="border p-2">
                                        <strong>Email</strong>
                                    </td>
                                    <td class="border p-2">
                                        <strong>Family</strong>
                                    </td>
                                    <td class="border p-2">
                                        <strong>Guest?</strong>
                                    </td>
                                    <td class="border p-2">
                                        <strong>Children</strong>
                                    </td>
                                    <td class="border p-2">
                                        <strong>Song</strong>
                                    </td>
                                    <td class="border p-2">

                                    </td>
                                </tr>
                                @foreach ($rsvps as $rsvp)
                                    <tr class="border">
                                        <td class="border p-2">
                                            {{ $rsvp->name }}
                                        </td>
                                        <td class="border p-2">
                                            {{ $rsvp->email }}
                                        </td>
                                        <td class="border p-2">
                                            {{ $rsvp->family }}
                                        </td>
                                        <td class="border p-2">
                                            {{ $rsvp->guest }}
                                        </td>
                                        <td class="border p-2">
                                            {{ $rsvp->num_of_children }}
                                        </td>
                                        <td class="border p-2">
                                            {{ $rsvp->song }}
                                        </td>
                                        <td class="border p-2">
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
                                    <td class="border p-2">
                                        <strong>Total RSVPs Completed</strong>
                                    </td>
                                    <td class="border p-2">
                                        <strong>Total Guests</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border p-2">
                                        {{ count($rsvps) }}
                                    </td>
                                    <td class="border p-2">
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


                </div>
            </div>
        </div>

        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">Passwords</div>
                <div class="card-body">
                    <form method="POST" action="/newPassword">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-12 col-md-8">
                                <div class="form-group">
                                  <input type="text" class="form-control" id="password" name="password" placeholder="Password">
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">Participants</div>
                <div class="card-body">
                    <form method="POST" action="/newParty">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group row">
                                    <label for="name" class="col-12 col-md-3">Name</label>
                                    <div class="col-12 col-md-9">
                                        <input type="text" name="name" class="form-control slug-source" id="name" placeholder="Enter name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="slug" class="col-12 col-md-3">Slug</label>
                                    <div class="col-12 col-md-9">
                                        <input type="text" name="slug" class="form-control slug-output" id="slug" placeholder="Enter URL slug" value="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="photo" class="col-12 col-md-3">Photo URL</label>
                                    <div class="col-12 col-md-9">
                                        <input type="text" name="photo" class="form-control" id="photo" placeholder="Enter photo URL">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="location" class="col-12 col-md-3">Location</label>
                                    <div class="col-12 col-md-9">
                                        <input type="text" name="location" class="form-control" id="location" placeholder="Enter location">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="role" class="col-12 col-md-3">Select Role:</label>
                                    <div class="col-12 col-md-9">
                                        <select class="form-control" id="role" name="role">
                                              <option value="groomsman">Groomsman</option>
                                              <option value="parent">Parent</option>
                                              <option value="sibling">Sibling</option>
                                              <option value="officiant">Officiant</option>
                                              <option value="bouncer">Bouncer</option>
                                              <option value="ring">Ring Bearer</option>
                                              <option value="flower">Flower Girl/Boy</option>
                                              <option value="photographer">Photographer</option>
                                              <option value="planner">Planner</option>
                                              <option value="caterer">Caterer</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="groom" class="col-12 col-md-3">Select Family:</label>
                                    <div class="col-12 col-md-9">
                                        <select class="form-control" id="groom" name="groom">
                                              <option>Selby</option>
                                              <option>Carr</option>
                                              <option>Both</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="url" class="col-12 col-md-3">URL</label>
                                    <div class="col-12 col-md-9">
                                        <input type="text" name="url" class="form-control" id="url" placeholder="Enter URL">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="about" class="col-12 col-md-3">About</label>
                                    <div class="col-12 col-md-9">
                                        <textarea name="about" class="form-control" id="about" placeholder="About this participant"></textarea>
                                    </div>
                                </div>
                                <input type="submit" value="Submit" class="btn btn-primary" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
{{--
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">Title</div>
                <div class="card-body">

                </div>
            </div>
        </div> --}}

    </div>
</div>
@endsection
