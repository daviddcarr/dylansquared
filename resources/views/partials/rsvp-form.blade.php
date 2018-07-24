<div id="rsvp-form" class="border border-1 border-dark rounded p-3">

    <transition name="fade"
                mode="out-in">

        <form  method="POST" action="/rsvp" @submit.prevent="onSubmit" @keydown="errors.clear($event.target.name)" v-if="!successful">
            {{ csrf_field() }}

            <h2>RSVP</h2>

            <div class="form-group row">
                <label
                    for="name"
                    class="col-sm-3 col-form-label text-left">Name<sup class='text-danger font-weight-bold'>*</sup></label>
                <div class="col-sm-9">
                    <input
                        type="text"
                        class="form-control"
                        id="name"
                        aria-describedby="nameHelp"
                        placeholder="Enter Name"
                        name="name"
                        v-model="name">
                </div>

                <span class="small text-danger" v-if="errors.has('name')" v-text="errors.get('name')"></span>
            </div>

            <div class="form-group row">
                <label
                    for="email"
                    class="col-sm-3 col-form-label text-left">Email address</label>
                <div class="col-sm-9">
                    <input
                        type="email"
                        class="form-control"
                        id="email"
                        aria-describedby="emailHelp"
                        placeholder="Enter email"
                        name="email"
                        v-model="email">
                </div>
                <small id="emailHelp" class="form-text text-muted text-right w-100 px-3">Not required, if you'd like updates we'll send them via email.</small>
            </div>

            <div class="form-group row">
                <label
                    for="family"
                    class="col-sm-3 col-form-label text-left">Select Family<sup class='text-danger font-weight-bold'>*</sup></label>
                <div class="col-sm-9">
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
                </div>
                <span class="small text-danger" v-if="errors.has('family')" v-text="errors.get('family')"></span>
            </div>

            <div class="row">
                <div class="col-12 col-md-6">

                    {{-- Guests --}}
                    <div class="form-group mb-1">
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
                                class="form-check-label large-circle"
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
                                class="form-check-label large-circle"
                                for="guest2">No</label>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-md-6">

                    {{-- Children --}}
                    <div class="form-group mb-0">
                        <label>Number of Children?</label>
                    </div>
                    <div class="form-group">
                        <div class="form-check form-check-inline mr-1">
                            <input class="form-check-input" type="radio" name="num_of_children" id="num-of-children0" value="0" checked v-model="num_of_children">
                            <label class="form-check-label small-circle" for="num-of-children0">0</label>
                        </div>
                        @for ($i = 1; $i <= 4; $i++)
                            <div class="form-check form-check-inline mr-1">
                                <input
                                    class="form-check-input"
                                    type="radio"
                                    name="num_of_children"
                                    id="num-of-children{{ $i }}"
                                    value="{{ $i }}"
                                    v-model="num_of_children">
                                <label class="form-check-label small-circle" for="num-of-children{{ $i }}">{{ $i }}</label>
                            </div>
                        @endfor
                    </div>

                </div>
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
                            <p>We can't wait to see you there! You can find <a href="#directions">directions and time below!</a></p>
                        </main>
                    </div>
                </div>
            </div>
        </div>

    </transition>

</div>
