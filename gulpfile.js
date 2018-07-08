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
    assetsPath = '';
// Configure sass
gulp.task('sass', () => {
    return gulp.src('sass/**/*.scss')
    .pipe(sourcemaps.init())
    .pipe(sass({
        outputStyle: 'expanded'
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

// Configure jsconcat and jsmin

gulp.task('compilejs', function() {
    gulp.src(
        [
            'js/**/*.js'
        ])
    .pipe(sourcemaps.init())
        //.pipe(concat('scripts.js'))
//    .pipe(uglify())
    .pipe(rename({
            suffix: '.min'
            }))
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest('js/'));
});

// Task to copy assets (images fonts and favicon) files
// gulp.task('copy-assets', () => {
//     gulp.src(
//         [
//             //assetsPath + '/**',
//         ],  {base: assetsPath}
//     )
//     .pipe(gulp.dest('web/'));
// });

    // Configure watch
gulp.task('watch', () => {
    gulp.watch('sass/**/*.scss', () => { 
        runSequence('clean:css', 'sass', 'autoprefixer', ['css:min']) 
    });
    //    gulp.watch('web/js/twigjs/**/*.js', () => {runSequence('compilejs')});
    gulp.watch('js/**/*.js', () => {
        runSequence('clean:js', 'compilejs')
    });
});

// Run build task
gulp.task('build', (callback) => {
    runSequence(
        'clean:css', 
        'clean:js', 
        'sass', 
        'autoprefixer',
        //'copy-assets', 
        'compilejs',
        ['css:min'], 
        callback
    );
});