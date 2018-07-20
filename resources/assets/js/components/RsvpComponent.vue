<template>
    <div class="form-container">
        <form  @submit.prevent="validateBeforeSubmit" >
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


            {{-- Guests --}}
            <div class="form-group">
                <label class="form-check-label">Are you bringing a guest?</label>
            </div>
            <div class="form-group">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="guest" id="guest1" value="yes">
                    <label class="form-check-label" for="guest1">Yes</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="guest" id="guest2" value="no" checked>
                    <label class="form-check-label" for="guest2">No</label>
                </div>
            </div>

            {{-- Children --}}
            <div class="form-group">
                <label>Number of Children?</label>
            </div>
            <div class="form-group">
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
            </div>


            <div class="form-group">
                <label for="song">Recommend a song for the reception.</label>
                <input type="text" class="form-control" id="song" aria-describedby="songHelp" name="song" placeholder="Title - Band">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>

            @include('partials.errors')
        </form>


    </div>

</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }

        data() {

        }
    }
</script>
