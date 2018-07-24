<div id="rsvp-form">

    <transition name="fade"
                mode="out-in">

        <form  method="POST" action="/rsvp" @submit.prevent="onSubmit" @keydown="errors.clear($event.target.name)" v-if="!successful">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="name">Name<sup class='text-danger'>*</sup></label>
                <input
                    type="text"
                    class="form-control"
                    id="name"
                    aria-describedby="nameHelp"
                    placeholder="Enter Name"
                    name="name"
                    v-model="name">

                <span class="small text-danger" v-if="errors.has('name')" v-text="errors.get('name')"></span>
            </div>

            <div class="form-group">
                <label for="email">Email address</label>
                <input
                    type="email"
                    class="form-control"
                    id="email"
                    aria-describedby="emailHelp"
                    placeholder="Enter email"
                    name="email"
                    v-model="email">
                <small id="emailHelp" class="form-text text-muted">Not required, if you'd like updates we'll send them via email.</small>
            </div>

            <div class="form-group">
                <label for="family">Select Family<sup class='text-danger'>*</sup></label>
                <select
                    class="form-control"
                    id="family"
                    name="family"
                    v-model="family"
                    @change="errors.clear($event.target.name)">
                        <option value="">Who Do You Know?</option>
                        <option value="selby">Selby</option>
                        <option value="carr">Carr</option>
                        <option value="both">Love You Both!</option>
                </select>

                <span class="small text-danger" v-if="errors.has('family')" v-text="errors.get('family')"></span>
            </div>


            {{-- Guests --}}
            <div class="form-group">
                <label class="form-check-label">Are you bringing a guest?</label>
            </div>
            <div class="form-group">
                <div class="form-check form-check-inline">
                    <input
                        class="form-check-input"
                        type="radio"
                        name="guest"
                        id="guest1"
                        value="yes"
                        v-model="guest">
                    <label
                        class="form-check-label"
                        for="guest1">Yes</label>
                </div>
                <div class="form-check form-check-inline">
                    <input
                        class="form-check-input"
                        type="radio"
                        name="guest"
                        id="guest2"
                        value="no"
                        checked
                        v-model="guest">
                    <label
                        class="form-check-label"
                        for="guest2">No</label>
                </div>
            </div>

            {{-- Children --}}
            <div class="form-group">
                <label>Number of Children?</label>
            </div>
            <div class="form-group">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="num_of_children" id="num-of-children0" value="0" checked v-model="num_of_children">
                    <label class="form-check-label" for="num-of-children0">0</label>
                </div>
                @for ($i = 1; $i <= 4; $i++)
                    <div class="form-check form-check-inline">
                        <input
                            class="form-check-input"
                            type="radio"
                            name="num_of_children"
                            id="num-of-children{{ $i }}"
                            value="{{ $i }}"
                            v-model="num_of_children">
                        <label class="form-check-label" for="num-of-children{{ $i }}">{{ $i }}</label>
                    </div>
                @endfor
            </div>


            <div class="form-group">
                <label for="song">Recommend a song for the reception.</label>
                <input
                    type="text"
                    class="form-control"
                    id="song"
                    aria-describedby="songHelp"
                    name="song"
                    placeholder="Title - Band"
                    v-model="song">
            </div>

            <button
                type="submit"
                class="btn btn-primary"
                :disabled="errors.any()">Submit</button>

            @include('partials.errors')
        </form>

        <div class="w-100" v-if="successful">
            <div class="content">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-8 col-xl-6">
                        <main role="main" class="inner cover text-center">
                            <h2>Thanks!</h2>
                            <p>We can't wait to see you there!</p>
                        </main>
                    </div>
                </div>
            </div>
        </div>

    </transition>

</div>
