var gulp = require('gulp');
var sass = require ('gulp-sass');
var concat = require ('gulp-concat');
var notify = require("gulp-notify");


gulp.task('styles', function (){
	return gulp.src('styles/**/*.scss')
			.pipe(sass({
			'sourcemap=none': true,
			errLogToConsole: true
				}))
			.on("error", notify.onError(function (error) {
			return "Message to the notifier: " + error.message;
 				}))
			.pipe(concat('style.css'))
			.pipe(gulp.dest('.'))
			.pipe(notify('Sass done'));
});

gulp.task('css', function () {
    var postcss = require('gulp-postcss');
    return gulp.src('*.css')
        .pipe( postcss([ require('cssnext')(), require('cssnano')() ]) )
        .pipe( gulp.dest('build/') );
});

gulp.task('default',function(){
	gulp.watch('styles/**/*.scss',['styles'])
});