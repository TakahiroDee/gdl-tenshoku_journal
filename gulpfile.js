const elixir = require('laravel-elixir');
const imagemin = require('gulp-imagemin');
const sprite = require('gulp.spritesmith');

require('laravel-elixir-vue-2');
require('laravel-elixir-pug');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application as well as publishing vendor resources.
 |
 */

elixir((mix) => {
    mix.sass('style.scss','public/dist/css/style.css');
    // mix.pug({
    //   // Compile to blade.php files or html files
    //   blade: true,
    //   // Pretty output or uglified
    //   pretty: true,
    //   // Source of pug files
    //   src: 'resources/assets/pug/',
    //   // Files to look for, useful if you are still naming files .jade
    //   search: '**/*.pug',
    //   // Files to skip, useful for partials
    //   exclude: '**/_*.pug',
    //   // Extension of pug files. Only needed to be set if still naming file .jade
    //   pugExtension: '.pug',
    //   // If blade is true, output to resources/views, otherwise public/html
    //   dest: 'resources/pug_to_blade/',
    // });
});


gulp.task('imagemin', () => {
    gulp.src('./public/dist/image/*')
        .pipe(imagemin());
});