let mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js').setPublicPath('public')
   .sass('resources/sass/app.scss', 'public/css')
   .setPublicPath('public');