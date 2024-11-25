const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */
 mix.setPublicPath('public');
 mix.setResourceRoot('../');

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/calendar.js', 'public/js')
    .postCss('resources/css/filament.css', 'public/css', [
    require('tailwindcss')
]).
postCss('resources/css/app.css', 'public/css', [
    require('postcss-import'),
    require('tailwindcss'),
    require('autoprefixer'),
]);

mix.js('node_modules/select-picker/src/picker.js', 'public/js/picker.js').postCss('node_modules/select-picker/dist/picker.css', 'public/css/picker.css');

mix.copyDirectory('resources/fonts', 'public/fonts');