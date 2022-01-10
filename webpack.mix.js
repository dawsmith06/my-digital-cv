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

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css').version();;
mix.js('resources/js/cv-vue.js', 'public/js').vue().version();
// mix.postCss('resources/css/main-css/app.css', 'public/css');
// mix.postCss('resources/css/views-css/welcome.scss', 'public/css');
// mix.postCss('resources/css/views-css/agent-app.scss', 'public/css');
