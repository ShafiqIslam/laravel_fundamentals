var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    
    mix.sass([
    	'app.scss'
    ], 'resources/assets/compiled/app.css');
    
    mix.coffee([
    	'module.coffee'
    ], 'resources/assets/compiled/app.js');
    
    mix.styles([
    	'vendor/bootstrap/css/bootstrap.min.css',
    	'vendor/normalize/normalize.css',
    	'vendor/font-awesome/css/font-awesome.min.css',
    	'vendor/google-fonts/lato.css',
    	'compiled/app.css'
    ], 'public/css/styles.css', 'resources/assets');

    mix.scripts([
    	'compiled/app.js',
    	'vendor/jquery/jquery.min.js',
    	'vendor/bootstrap/js/bootstrap.min.js',
    	'scripts/custom.js'
    ], 'public/js/scripts.js', 'resources/assets');


    mix.version(['public/css/styles.css', 'public/js/scripts.js'], 'public');
});
