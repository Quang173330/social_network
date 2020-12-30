const mix = require('laravel-mix');

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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');
mix.styles(['resources/css/login.css',], 'public/css/all.css');
mix.styles(['resources/css/time_line.css',], 'public/css/time_line.css');
mix.styles(['resources/css/navbar.css',], 'public/css/navbar.css');
mix.styles(['resources/css/profile.css',], 'public/css/profile.css');
mix.js(['resources/js/profile.js',], 'public/js/profile.js');
mix.js(['resources/js/search.js',], 'public/js/search.js');
