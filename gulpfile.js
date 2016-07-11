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

var path = {
    'semantic_src': 'semantic/dist/',
    'jquery_src': 'node_modules/jquery/dist/'
};


elixir(function(mix) {
    mix.copy(path.jquery_src + 'jquery.min.js', 'public/jquery/jquery.min.js')
        .copy( path.semantic_src + 'semantic.css', 'public/semantic-ui/css/semantic.css')
        .copy('semantic/dist/semantic.js', 'public/semantic-ui/js/semantic.js')
        .copy('semantic/dist/themes', 'public/semantic-ui/css/themes')
        .copy('semantic/dist/components', 'public/semantic-ui/components');
    // mix.copy('node_modules/bootstrap/dist', 'public/bootstrap');
});
