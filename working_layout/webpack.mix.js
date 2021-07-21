let mix = require('laravel-mix');
let path = require('path');

mix.setPublicPath(path.resolve('./'));

mix.styles([
  'assets/css/all.min.css',
  'assets/css/tailwind.css',
  'assets/css/fonts.css',
  'assets/css/editor-style.css',
  'assets/css/custom.css',
], 'dist/css/app.css',{
  outputStyle: 'nested'
});

mix.scripts([
  'assets/js/general.js',
  'assets/js/modal.js',
  'assets/js/sliders.js',
], 'dist/js/app.js');

mix.copyDirectory('assets/webfonts', 'dist/webfonts');

mix.options({
    postCss: [
        require('postcss-nested-ancestors'),
        require('postcss-nested'),
        require('postcss-import'),
        require('tailwindcss'),
        require('autoprefixer'),
    ]
});

mix.version();
