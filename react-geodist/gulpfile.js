var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');


gulp.task('styles', function () {
  gulp.src('./src/css/style.sass')
    .pipe(sass())
    .pipe(autoprefixer())
    .pipe(gulp.dest('./src/css/'));

});


gulp.task('serve', function () {
  gulp.watch('./src/css/*.sass', ['styles']);
});

gulp.task('default', ['styles', 'serve']);