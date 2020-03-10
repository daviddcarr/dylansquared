/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 16);
/******/ })
/************************************************************************/
/******/ ({

/***/ 16:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(17);


/***/ }),

/***/ 17:
/***/ (function(module, exports) {

// /**
//  * First we will load all of this project's JavaScript dependencies which
//  * includes Vue and other libraries. It is a great starting point when
//  * building robust, powerful web applications using Vue and Laravel.
//  */

// require('./bootstrap');

// window.Vue = require('vue');

// /**
//  * Next, we will create a fresh Vue application instance and attach it to
//  * the page. Then, you may begin adding components to this application
//  * or customize the JavaScript scaffolding to fit your unique needs.
//  */


// class Errors {
//     constructor() {
//         this.errors = {};
//     }

//     get(field) {
//         if (this.errors[field]) {
//             return this.errors[field][0];
//         }
//     }

//     record(errors) {
//         this.errors = errors;
//         console.log(this.errors);
//     }

//     clear(field) {
//         this.errors[field] = [];
//     }

//     has(field) {
//         return this.errors.hasOwnProperty(field);
//     }

//     any() {
//         for (var field in this.errors) {
//             if (this.errors[field].length > 0) {
//                 return true;
//             }
//         }
//         return false;
//     }
// }

// new Vue({
//     el: '#rsvp-form',

//     data: {
//         name: '',
//         email: '',
//         family: '',
//         guest: 'no',
//         num_of_children: '0',
//         song: '',
//         successful: false,
//         password: '',
//         hasPassword: false,
//         incorrectPassword: false,
//         errors: new Errors()
//     },

//     methods: {
//         onSubmit() {
//             axios.post('/rsvp', this.$data)
//                 .then(response => {
//                     this.successful = true;
//                 })
//                 .catch(error => {
//                     this.errors.record(error.response.data.errors);
//                 });
//         },
//         checkPassword() {
//             axios.post('/password', {
//                 password: this.password
//             })
//             .then(response => {
//                 console.log(response.data);
//                 if(response.data) {
//                     this.hasPassword = true;
//                     this.incorrectPassword = false;
//                 } else {
//                     this.incorrectPassword = true;
//                 }
//             }).catch(error => {
//                 console.log(error);
//             })
//         }
//     }
// });

/***/ })

/******/ });