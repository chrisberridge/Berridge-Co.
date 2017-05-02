// generated on 2017-03-08 using generator-webapp 2.4.1
const gulp = require('gulp');
const gulpLoadPlugins = require('gulp-load-plugins');
const browserSync = require('browser-sync').create();
const del = require('del');
const wiredep = require('wiredep').stream;
const runSequence = require('run-sequence');

const $ = gulpLoadPlugins();
const reload = browserSync.reload;

var dev = true;

var connectPHP = require('gulp-connect-php');

gulp.task('php', function(){
    connectPHP.server({ base: '.', keepalive:true, hostname: 'localhost', port:9000, open: false});
});

gulp.task('browserSync', function() {
    browserSync({
        proxy:'127.0.0.1',
        port:8080
    });
});

gulp.task('default', ['serve', 'php']);


gulp.task('clean', del.bind(null, ['.', 'html/*']));

gulp.task('serve', () => {
  runSequence(['clean'], () => {
    browserSync.init({
      notify: false,
      port: 9000,
      server: {
        baseDir: ['.', 'html'],
        routes: {
          '/bower_components': 'bower_components'
        }
      }
    });

    gulp.watch([
      '*.html',
      'js/*',
      '*.php',
      'css/*',
    ]).on('change', reload);
  });
});







