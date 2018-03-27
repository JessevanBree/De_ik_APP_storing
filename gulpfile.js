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
            'custom.css',
            'style.css',
            'animate.css',
            'fontawsome.min.css',
        ], 'public/assets/css/all.css')
        .scripts([
            'jquery-3.3.1.min.js',
            'boodstrap.min.js',
            'jquery.metisMenu.js',
            'inspinia.js',
            'jquery.slimscroll.min.js'
        ], 'public/assets/js/all.js')
        .copy(
            'resources/assets/fonts/',
            'public/build/assets/webfonts/'
        )
        .version(['assets/css/all.css', 'assets/js/all.js'])
    ;
});