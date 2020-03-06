<form class="row"  method="POST" action="/rsvp">
    <div class="col-12">
        <h2>RSVP!</h2>
        <hr class="rainbow">
    </div>
    <div class="col-12 col-md-6">
        {{ csrf_field() }}
        <div class="form-group mb-0">
            <input type="text" class="form-control" id="name" aria-describedby="nameHelp" placeholder="First and Last Name" required name="name">
        </div>

        <div class="form-group">
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email">
            <small id="emailHelp" class="form-text text-muted">Not required, if you'd like updates we'll send them via email.</small>
        </div>

        <div class="form-group">
            <select class="form-control" id="family" name="family">
                <option value="">Who Do You Know?</option>
                <option value="selby">Dylan Selby</option>
                <option value="carr">Dylan Carr</option>
                <option value="both">Love You Both!</option>
            </select>
        </div>
    </div>
    <div class="col-12 col-md-6">
        {{-- Guests --}}

        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label class="form-check-label">Are you bringing a guest?</label>
                </div>
                <div class="form-group guest">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="guest" id="guest1" value="yes">
                        <label class="form-check-label" for="guest1">Yes</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="guest" id="guest2" value="no" checked>
                        <label class="form-check-label" for="guest2">No</label>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="mb-0">Number of Children?</label>
                </div>
                <div class="form-group">
                    <select class="form-control" id="num_of_children" name="num_of_children">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div>
                {{-- <div class="form-group children">
                    
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="num_of_children" id="num-of-children0" value="0" checked>
                        <label class="form-check-label" for="num-of-children0">0</label>
                    </div>
                    @for ($i = 1; $i <= 4; $i++)
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="num_of_children" id="num-of-children{{ $i }}" value="{{ $i }}">
                            <label class="form-check-label" for="num-of-children{{ $i }}">{{ $i }}</label>
                        </div>
                    @endfor
                </div> --}}
            </div>
        </div>


        {{-- Children --}}

        <button type="submit" class="btn btn-primary">Submit</button>

        @include('partials.errors')
    </div>
</form>
