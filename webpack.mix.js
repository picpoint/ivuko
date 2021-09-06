const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */


mix.styles([
    'resources/assets/admin/plugins/fontawesome-free/css/all.min.css',
    'resources/assets/admin/css/adminlte.min.css',
], 'public/assets/admin/css/admin.css');

mix.sass('resources/assets/userssources/sass/style.scss', 'public/assets/userssources/css/style.css')
    .browserSync({
    proxy: 'http://ivuko/'
});


// mix.less('resources/assets/userssources/less/mainless.less', 'public/assets/userssources/css/mainless.css').options({
//     processCssUrls: false
// });




mix.scripts([
    'resources/assets/admin/plugins/jquery/jquery.min.js',
    'resources/assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js',
    'resources/assets/admin/js/adminlte.min.js',
    'resources/assets/admin/js/demo.js',
], 'public/assets/admin/js/admin.js');

mix.scripts([
    'resources/assets/userssources/js/test.js',
], 'public/assets/userssources/js/test.js');


mix.copyDirectory('resources/assets/admin/img', 'public/assets/admin/img');
mix.copyDirectory('resources/assets/admin/plugins/fontawesome-free/webfonts', 'public/assets/admin/webfonts');
mix.copy('resources/assets/admin/css/adminlte.min.css.map', 'public/assets/admin/css/adminlte.min.css.map');