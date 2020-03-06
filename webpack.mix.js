let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('node_modules/jquery/dist/jquery.min.js', 'public/js')
    .js('node_modules/fullpage.js/dist/fullpage.min.js', 'public/js')
    .js('resources/assets/js/app.js', 'public/js')
    .js('resources/assets/js/main.js', 'public/js')
    .js('resources/assets/js/bootstrap.js', 'public/js')

    //Images
    .copy('resources/assets/images/**/*', 'public/images')
    .copy('node_modules/fullpage.js/dist/fullpage.css', 'public/css')

    // CSS
    .sass('resources/assets/sass/app.scss', 'public/css');
