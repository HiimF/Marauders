'use strict';

var gulp = require( 'gulp' );
var autoprefixer = require( 'gulp-autoprefixer' );
var sass = require( 'gulp-sass' );
var sourcemaps = require( 'gulp-sourcemaps' );
var concat = require( 'gulp-concat' );
var gulpif = require('gulp-if');
var minifyCss = require('gulp-minify-css');
var sourcemaps = require('gulp-sourcemaps');
var uglify = require('gulp-uglify');
var del = require('del');
var fileinclude = require( 'gulp-file-include' );
var minifyHTML = require( 'gulp-minify-html' );
var replace = require('gulp-replace');

var isProduction = false;

gulp.task( 'sass', function() {
  gulp.src( './src/scss/style.scss' )
  .pipe( gulpif( !isProduction, sourcemaps.init() ) )
  .pipe( sass().on( 'error', sass.logError ) )
  .pipe( autoprefixer({
    browsers: ['last 2 versions'],
  }) )
  .pipe( gulpif( isProduction, minifyCss({ compatibility: 'ie10' }) ) )
  .pipe( gulpif( !isProduction, sourcemaps.write( './' ) ) )
  .pipe( gulp.dest( './public/css' ) );
});

gulp.task( 'js', function() {
  gulp.src([
    './node_modules/jquery/dist/jquery.js',
    './src/js/**/*.js'
  ])
  .pipe( gulpif( !isProduction, sourcemaps.init() ) )
  .pipe( concat( 'script.js' ) )
  .pipe( gulpif( isProduction, uglify() ) )
  .pipe( gulpif( !isProduction, sourcemaps.write('./') ) )
  .pipe( gulp.dest( './public/js' ) );
});

gulp.task( 'html', function() {
  gulp.src( ['./src/html/*.html'] )
    .pipe( fileinclude({
      prefix: '@@',
      basepath: '@file'
    }))
    .pipe( gulpif ( isProduction, minifyHTML() ) )
    .pipe( gulp.dest( './public' ) );
});

gulp.task('clean:map', function () {
  return del([
    './public/**/*.map'
  ]);
});

gulp.task('set:production', function () {
  isProduction = true;
});

gulp.task( 'default', ['sass', 'js', 'html'] );
 
gulp.task( 'watch', ['default'], function () {
  gulp.watch( './src/scss/**/*.scss', ['sass'] );
  gulp.watch( './src/js/**/*.js', ['js'] );
  gulp.watch( './src/html/**/*.html', ['html'] );
});

gulp.task( 'production', ['set:production', 'default', 'clean:map']);