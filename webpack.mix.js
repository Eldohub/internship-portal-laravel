let mix = require('laravel-mix');
const CleanWebpackPlugin = require('clean-webpack-plugin');

// paths to clean
var pathsToClean = [
    'public/assets/app/js',
    'public/assets/app/css',
    'public/assets/admin/js',
    'public/assets/admin/css',
    'public/assets/admin/fonts',
];

// the clean options to use
var cleanOptions = {};

mix.webpackConfig({
    plugins: [
        new CleanWebpackPlugin(pathsToClean, cleanOptions)
    ]
});

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



mix.copy([
    'node_modules/bootstrap-material-design/dist/js/bootstrap-material-design.js',
], 'public/assets/admin/js/mdb.js');


mix.copy([
    'node_modules/bootstrap-material-design/dist/css/bootstrap-material-design.css',
], 'public/assets/admin/css/mdb.css');

mix.copy([
    'node_modules/material-icons/css/material-icons.min.css/',
], 'public/assets/admin/fonts/');


/*
* Combining compiled Semantic-UI to main app files
*/
mix.js('resources/assets/js/app.js', 'public/js')
	.sass('resources/assets/sass/app.scss', 'public/css')
	.copy('node_modules/semantic-ui-css/semantic.min.css','public/css/semantic.min.css')
	.copy('node_modules/semantic-ui-css/semantic.min.js','public/js/semantic.min.js');
