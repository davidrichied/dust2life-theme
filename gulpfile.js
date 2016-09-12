var gulp = require('gulp');
var postcss = require('gulp-postcss');
var concat = require('gulp-concat');
var autoprefixer = require('autoprefixer');
var cssnext = require('cssnext');
var precss = require('precss');
gulp.task('css', function () {
  var processors = [
	autoprefixer,
  	cssnext,
  	precss
  ];
  return gulp.src('./src/style.css')
    .pipe(postcss(processors))
    .pipe(concat('style.css'))
    .pipe(gulp.dest('./'));
});
gulp.task('watch', function() {
	gulp.watch('src/*.css', ['css']);
});