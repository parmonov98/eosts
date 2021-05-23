var gulp = require('gulp'),
  sass = require('gulp-sass'),
  gulpif = require('gulp-if'),
  clean = require('gulp-clean'),
  useref = require('gulp-useref'),
  uglify = require('gulp-uglify'),
  plumber = require('gulp-plumber'),
  purify = require('gulp-purify-css'),
  imagemin = require('gulp-imagemin'),
  wiredep = require('wiredep').stream,
  cleanCSS = require('gulp-clean-css'),
  svgSprite = require('gulp-svg-sprite'),
  gulpSequence = require('gulp-sequence'),
  mmq = require('gulp-merge-media-queries'),
  imageminPngquant = require('imagemin-pngquant'),
  imageminJpegtran = require('imagemin-jpegtran');
imageminMozjpeg = require('imagemin-mozjpeg'),
  browserSync = require('browser-sync').create();
var imageminOptipng = require('imagemin-optipng');



// Image Optimization
gulp.task('imagemin', function (done) {
  gulp.src('imgs/**/*.{jpg,png}')
    .pipe(imagemin([
      // imageminOptipng({ number: 7 }),
      imageminPngquant({
        speed: 11,
        floyd: 1,
        strip: false,
        quality: [10]
      }),
      imageminJpegtran({
        progressive: true,
      }),
      imageminMozjpeg({
        quality: 40,
      })
    ]))
    .pipe(gulp.dest('images/'));
  done();
});

