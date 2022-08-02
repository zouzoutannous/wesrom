const gulp = require('gulp');
const postcss = require('gulp-postcss');
const sass = require('gulp-sass')(require('sass'));
const cssnano = require('cssnano');

function style(){
    let plugins = [
        cssnano()
    ];

    return gulp.src('./src/scss/**/*.scss')
    .pipe(sass())
    .pipe(postcss(plugins))
    .pipe(gulp.dest('./src/css'));
}

function watch(){
    gulp.watch('./src/scss/**/*.scss', style );
}

exports.style = style;
exports.watch = watch;