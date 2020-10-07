'use strict';
 
var gulp = require( 'gulp' );
var less = require('gulp-less');
var lesshint = require('gulp-lesshint');
var wait = require('gulp-wait');
var clear = require('clear');

var lessFiles = "./theme/style.less";
var lessComponents = "./inc/widgets/**/*.less";

gulp.task('lessglobal', function () {
  return gulp.src( lessFiles )
    .pipe( wait(1500) )
    
    .pipe( lesshint() )
    .pipe( lesshint.reporter() )
    .pipe( lesshint.failOnError() )

    .pipe( less() )
    .pipe( gulp.dest( './assets/css' ) );
});

gulp.task('lesscomponent', function () {
  return gulp.src( lessComponents )
    .pipe( wait(1500) )
    
    .pipe( lesshint() )
    .pipe( lesshint.reporter() )
    .pipe( lesshint.failOnError() )

    .pipe( less() )
    .pipe(gulp.dest('./inc/widgets/.'));
});
 
gulp.task( 'watch', function () {
  gulp.watch( lessFiles, ['cleanconsole', 'lessglobal'] );
  gulp.watch( lessComponents, ['cleanconsole', 'lesscomponent'] );
});

/**
 * CLEANCONSOLE
 * Limpa o console
*/
gulp.task('cleanconsole', function() {
  return clear();
});

gulp.task( 'default', ['lessglobal', 'watch'] );
gulp.task( 'default', ['lessglobal', 'lesscomponent', 'watch'] );