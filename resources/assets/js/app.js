/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example-component', require('./components/ExampleComponent.vue'));
//
// const app = new Vue({
//     el: '#app'
// });

class Errors {
    constructor() {
        this.errors = {};
    }

    get(field) {
        if (this.errors[field]) {
            return this.errors[field][0];
        }
    }

    record(errors) {
        this.errors = errors;
        console.log(this.errors);
    }

    clear(field) {
        this.errors[field] = [];
    }

    has(field) {
        return this.errors.hasOwnProperty(field);
    }

    any() {
        // console.log("any?");
        for (var field in this.errors) {
            if (this.errors[field].length > 0) {
                // console.log("so true");
                return true;
            }
        }
        // console.log("nope");
        return false;
    }
}

new Vue({
    el: '#rsvp-form',

    data: {
        name: '',
        email: '',
        family: '',
        guest: 'no',
        num_of_children: '0',
        song: '',
        successful: false,
        errors: new Errors()
    },

    methods: {
        onSubmit() {
            axios.post('/rsvp', this.$data)
                .then(response => {
                    this.successful = true;
                })
                .catch(error => {
                    this.errors.record(error.response.data.errors);
                });
        }
    }
});
