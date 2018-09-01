// Elixir's gulpfile.js
const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');
elixir(function(mix){
    mix.sass([
        './assets/sass/app.scss'
    ], 'public/css');
    mix.webpack(
        './assets/js/app.js',
        './public/js')
});

    gulp.task('watch', function () {
    gulp.watch('./assets/sass*.scss', ['css']);
    gulp.watch('./assets/js*.js', ['js']);
});

