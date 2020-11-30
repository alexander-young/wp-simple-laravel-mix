const mix = require('laravel-mix');

mix.sourceMaps(true, "source-map");

mix.sass("src/sass/main.scss", "dist/css");
mix.js("src/js/main.js", "dist/js");
