'use strict';

var gulp = require('gulp');
var rename = require('gulp-rename');
var sass = require('gulp-sass');
var browserSync = require('browser-sync')


gulp.task('sass', function () {
    return gulp.src('./assets/styles/index.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(rename('style.css'))
        .pipe(gulp.dest('./'))
        .pipe(browserSync.stream());
})

gulp.task('serve', ['sass'], function() {
    browserSync.init({
        proxy: 'oldcoyote.dev'
    });

    gulp.watch('assets/styles/**/*.scss', ['sass']);
    gulp.watch('**/*.php').on('change', browserSync.reload);
});

gulp.task('default', ['serve']);