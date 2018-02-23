var gulp          = require('gulp'),
    livereload    = require('gulp-livereload'),
    sass          = require('gulp-sass');

gulp.task('watch', function(){
  livereload.listen();
  // gulp.watch( 'frontend/*.pug', gulp.series( 'pug' ) );
  gulp.watch( 'frontend/*.sass', gulp.series( 'sass' ) );
  gulp.watch( 'public/*.php').on('change', livereload.changed);
  gulp.watch( 'public/js/*.js').on('change', livereload.changed);
  gulp.watch( 'public/*.css').on('change', livereload.changed);
});

gulp.task('sass', function () {
  return gulp.src( 'frontend/style.sass' )
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest( 'public/'));
});

gulp.task(
  'default',
  gulp.series(
    'watch'
  )
);