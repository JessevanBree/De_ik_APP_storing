var elixir = require('laravel-elixir');
var gulp = require('gulp');
var inlineCss = require('gulp-inline-css');

var Task = elixir.Task;

// set public_html path
elixir.config.publicDir = 'public';
elixir.config.publicPath = 'public';

elixir(function (mix) {
    mix.
        sass([
            'app.scss',
            'boodstrap.min.css',
        ], 'public/assets/css/all.css')
        .scripts([
            'app.js',            
            'jquery-3.3.1.min.js',
            'bootstrap.js',
        ], 'public/assets/js/all.js')
        .version(['assets/css/all.css', 'assets/js/all.js'])
    ;
});