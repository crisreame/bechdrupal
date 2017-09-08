require('es6-promise').polyfill();

var gulp = require('gulp');
var sass = require('gulp-sass');
var scssLint = require('gulp-sass-lint');
var autoprefixer = require('gulp-autoprefixer');
var sourcemaps = require('gulp-sourcemaps');

gulp.task('sass',function(){
    return gulp.src('sass/*.scss')
    .pipe(sass())
	    .pipe(autoprefixer({
            browsers: ['last 4 versions'],
            cascade: false
        }))
        .pipe(sourcemaps.init())
			.pipe(sass().on('error', sass.logError))
			.pipe(sourcemaps.write(''))
        .pipe(gulp.dest('css/'))
});

gulp.task('watch',['sass'],function(){
   gulp.watch('sass/**/*.scss',['sass']);
});

gulp.task('default', ['sass', 'watch']);
