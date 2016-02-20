var elixir = require('laravel-elixir');

var bower_dir = 'vendor/bower_components/';
var node_dir = 'node_modules/';

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as copying vendor resources.
 |
 */
elixir(function (mix) {
    mix.sass('app.scss', 'resources/assets/css/')

        // Java script
        .copy(bower_dir + 'jquery/dist/jquery.min.js', 'resources/assets/js/vendor/jquery.js')
        .copy(node_dir + 'bootstrap-sass/assets/javascripts/bootstrap.js', 'resources/assets/js/vendor/bootstrap.js')
        .copy(bower_dir + 'eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js', 'resources/assets/js/vendor/bootstrap-datetimepicker.js')
        .copy(bower_dir + 'remarkable-bootstrap-notify/dist/bootstrap-notify.js', 'resources/assets/js/vendor/bootstrap-notify.js')
        .copy(bower_dir + 'vue/dist/vue.js', 'resources/assets/js/vendor/vue.js')
        .copy(bower_dir + 'bootbox/bootbox.js', 'resources/assets/js/vendor/bootbox.js')
        .copy(bower_dir + 'vue-resource/dist/vue-resource.js', 'resources/assets/js/vendor/vue-resource.js')
        .copy(bower_dir + 'Bootflat/js/site.min.js', 'resources/assets/js/vendor/bootflat.js')
        //.copy(bower_dir + 'typeahead.js/dist/typeahead.jquery.js', 'resources/assets/js/vendor/typeahead.js')
        //.copy(bower_dir + 'socket.io-client/socket.io.js', 'resources/assets/js/vendor/socket.io.js')
        .scripts(
            [
                'vendor/jquery.js',
                'vendor/bootstrap.js',
                'vendor/bootstrap-datetimepicker.js',
                'vendor/bootstrap-notify.js',
                'vendor/vue.js',
                'vendor/vue-resource.js',
                'vendor/bootbox.js',
                //'vendor/socket.io.js',
                //'vendor/typeahead.js',
            ], 'public/js/all.js')

        // CSS
        .copy(bower_dir + 'font-awesome/css/font-awesome.min.css', 'resources/assets/css/vendor/font-awesome.css')
        .copy(bower_dir + 'ionicons/css/ionicons.min.css', 'resources/assets/css/vendor/ionicons.css')
        .copy(bower_dir + 'animate.css/animate.css', 'resources/assets/css/vendor/animate.css')
        .copy(bower_dir + 'eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css', 'resources/assets/css/vendor/bootstrap-datetimepicker.css')
        .styles(
            [
                'app.css',
                'vendor/animate.css',
                'vendor/font-awesome.css',
                'vendor/ionicons.css',
            ], 'public/css/all.css')

        // Extras
        .copy(bower_dir + 'Bootflat/img', 'public/bootflat/img')
        .copy(bower_dir + 'Bootflat/bootflat/img', 'public/bootflat/img')
        .copy(bower_dir + 'font-awesome/fonts', 'public/fonts')
        .copy(bower_dir + 'ionicons/fonts', 'public/fonts')
});
