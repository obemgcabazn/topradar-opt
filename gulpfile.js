var gulp          = require('gulp'),
    livereload    = require('gulp-livereload'),
    sass          = require('gulp-sass'),
    pug           = require('gulp-pug');

gulp.task('watch', function(){
  livereload.listen();
  // gulp.watch( 'frontend/*.pug', gulp.series( 'pug' ) );
  gulp.watch( 'frontend/*.sass', gulp.series( 'sass' ) );
  gulp.watch( 'public/*.html').on('change', livereload.changed);
  gulp.watch( 'public/*.css').on('change', livereload.changed);
});

gulp.task('pug', function (){
  return gulp.src( 'frontend/index.pug' )
    .pipe( pug(
      {pretty: true}
      ) )
    .pipe( gulp.dest( 'public/' ) )
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