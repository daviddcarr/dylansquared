<form  method="POST" action="/rsvp">
    {{ csrf_field() }}

    <div class="form-group">
        <label for="name">Name<sup class='text-danger'>*</sup></label>
        <input type="text" class="form-control" id="name" aria-describedby="nameHelp" placeholder="Enter Name" required name="name">
    </div>

    <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email">
        <small id="emailHelp" class="form-text text-muted">Not required, if you'd like updates we'll send them via email.</small>
    </div>

    <div class="form-group">
        <label for="family">Select Family<sup class='text-danger'>*</sup></label>
        <select class="form-control" id="family" name="family">
            <option value="">Who Do You Know?</option>
            <option value="selby">Selby</option>
            <option value="carr">Carr</option>
            <option value="both">Love You Both!</option>
        </select>
    </div>

    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="guest" name="guest" value="1">
        <label class="form-check-label" for="guest">Are you bringing a guest?</label>
    </div>

    <div class="form-group">
        <label for="num-of-children">Number of Children?</label>
        <input type="number" class="form-control" id="num-of-children" aria-describedby="num-of-childrenHelp" value="0" name="num_of_children">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>

    @include('partials.errors')
</form>
