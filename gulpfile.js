'use strict';

var gulp = require('gulp'),
    sass = require('gulp-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    sourcemaps = require('gulp-sourcemaps'),
    clean = require('gulp-clean'),
    cssmin = require('gulp-cssmin'),
    rename = require('gulp-rename'),
    runSequence = require('run-sequence'),
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify'),
    npmPath = 'node_modules/';
// Configure sass
gulp.task('sass', () => {
    return gulp.src('sass/**/*.scss')
    .pipe(sourcemaps.init())
    .pipe(sass({
        outputStyle: 'expanded',
        includePaths: ['node_modules/bootstrap/scss']
    })
    .on('error', sass.logError))
    .pipe(sourcemaps.write('sourceMap'))
    .pipe(gulp.dest('css'))
});

// Configure autoprefixer
gulp.task('autoprefixer', () => {
    gulp.src(['css/**/*.css'])
    .pipe(autoprefixer({
        browsers: ['last 2 versions'],
        cascade: false
    }))
    .pipe(gulp.dest('css/'))
});

// Configure clean task
gulp.task('clean:css', () => {
    gulp.src('css/*.css')
    .pipe(clean())
});

gulp.task('clean:js', function () {
    gulp.src('js/*')
    .pipe(clean())
});

// Configure css min
var cssMinifyLocation = ['css/*.css', '!css/*.min.css'];
gulp.task('css:min', () => {
    return gulp.src(cssMinifyLocation)
    .pipe(autoprefixer())
    .pipe(cssmin())
    .pipe(rename(
        { suffix: '.min' }
    ))
    .pipe(gulp.dest('css'))
});

gulp.task('copy-npm', () => {
    gulp.src(
        [
            npmPath + 'jquery/dist/jquery.min.js',
            npmPath + 'bootstrap/dist/js/bootstrap.min.js',
            npmPath + 'popper.js/dist/popper.min.js',
            npmPath + 'lightbox2/dist/css/lightbox.min.css',
            npmPath + 'lightbox2/dist/images',
            npmPath + 'lightbox2/dist/js/lightbox.min.js'
        ],  {base: npmPath}
    )
    .pipe(gulp.dest('vendors'));
});

    // Configure watch
gulp.task('watch', () => {
    gulp.watch('sass/**/*.scss', () => { 
        runSequence('clean:css', 'sass', 'autoprefixer', ['css:min']) 
    });
});

// Run build task
gulp.task('build', (callback) => {
    runSequence(
        'clean:css',
        'sass', 
        'autoprefixer',
        ['css:min'], 
        callback
    );
});