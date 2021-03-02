// webpack.mix.js

let mix = require('laravel-mix');

mix.sass('scss/src/app.scss', 'dist/').options({ processCssUrls: false });;
