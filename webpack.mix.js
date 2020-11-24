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

mix.webpackConfig(require('./webpack.config'))
    .js('resources/js/app.js', 'public/js')
    .vue({ version: 2 })
    .sass('resources/css/app.scss', 'public/css')
    .options({
        postCss: [
            require('tailwindcss')('./tailwind.config.js')
        ]
    })
    .extract();


// Start BrowserSync
if (!mix.inProduction()) {
    mix.browserSync('homestead.test');
}

if (mix.inProduction()) {
    mix.minify([
            'public/js/app.js',
            'public/css/app.css',
        ])
        .sourceMaps()
        .version();
}
