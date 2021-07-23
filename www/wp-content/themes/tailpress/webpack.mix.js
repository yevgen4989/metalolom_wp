let mix = require('laravel-mix');
let path = require('path');

mix.setPublicPath(path.resolve('./'));

mix.scripts([
  'assets/js/jquery.js',
  'assets/js/slick.js',
  'assets/js/general.js',
  'assets/js/modal.js',
  'assets/js/sliders.js',
], 'dist/js/app.js');

mix.copyDirectory('assets/webfonts', 'dist/webfonts');
mix.copyDirectory('assets/images', 'dist/images');

mix.copyDirectory('assets/images', 'temp/images');
mix.copyDirectory('assets/webfonts', 'temp/webfonts');


mix.postCss('assets/css/tailwind.css', 'temp/css/tailwind.css');

mix.styles([
  'assets/css/all.min.css',
  'assets/css/slick.css',
  'assets/css/slick-theme.css',
  'assets/css/fonts.css',
  'assets/css/custom.css',
], 'temp/css/app.css');

mix.postCss('temp/css/app.css', 'temp/css/app.css');

mix.styles([
  'temp/css/tailwind.css',
  'temp/css/app.css'
], 'temp/css/all.css')
  .copy('temp/css/all.css', 'dist/css/all.css');



mix
  .postCss('assets/css/block-editor.css', 'temp/css/block-editor.css')
  .combine([
    'temp/css/tailwind.css',
    'temp/css/block-editor.css'
  ], 'dist/css/editor-style.css'
  );




mix.options({
    processCssUrls: false,
    postCss: [
        require('postcss-nested-ancestors'),
        require('postcss-nested'),
        require('postcss-import'),
        require('tailwindcss'),
        require('autoprefixer'),
        require('postcss-discard-comments')({
          removeAll: true
        })
    ],
    fileLoaderDirs: {
      fonts: `dist/webfonts`,
      images: `dist/images`
    }
});

mix.webpackConfig({
  watchOptions: {
    ignored: ['mix-manifest.json', 'node_modules/'],
    aggregateTimeout: 10000,
    poll: 10000,
    followSymlinks: true,
  },
});
