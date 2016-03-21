var elixir = require('laravel-elixir');

elixir.config.assetsPath = '';
elixir.config.sourcemaps = false;

elixir(function(mix) {
    mix.sass(["all.scss"], "css/all.css");
    // mix.scripts([
    //     'settings_advanced.js',
    // ]);
});