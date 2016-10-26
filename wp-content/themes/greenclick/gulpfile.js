var gulp         = require('gulp'),
    gutil        = require('gulp-util'),
    sass         = require('gulp-sass'),
    jshint       = require('gulp-jshint'),
    stylish      = require('jshint-stylish'),
    uglify       = require('gulp-uglify'),
    browserify   = require('browserify'),
    source       = require('vinyl-source-stream'),
    buffer       = require('vinyl-buffer');
    autoprefixer = require('gulp-autoprefixer'),
    cssnano      = require('gulp-cssnano'),
    cmq          = require('gulp-combine-media-queries'),
    uncss        = require('gulp-uncss'),
    imagemin     = require('gulp-imagemin'),
    browserSync  = require('browser-sync'),
    reload       = browserSync.reload;


// settings
var settings = {
  build: './build',
  source: 'src'
};


// lint js
gulp.task('lint', function() {
  'use strict';

  gulp.src(settings.source+'/js/*.js')
  .pipe(jshint())
  .pipe(jshint.reporter(stylish));
});


// minify js
gulp.task('js', function() {
  return browserify(settings.source+'/js/app.js')
    .bundle()
    .pipe(source('app.js'))
    .pipe(buffer())
    .pipe(uglify())
    .pipe(gulp.dest(settings.build+'/assets/js'));
});


// minify css
gulp.task('css', function() {
    var input = './src/**/*.scss';
    'use strict';

    return gulp.src(input)
        .pipe(sass({
            includePaths: [
                '../node_modules/support-for/sass',
                '../node_modules/normalize-scss/sass'
            ],
        }).on('error', sass.logError))
		.pipe(autoprefixer({
			browsers: ['last 2 versions']
		}))
        .pipe(cssnano())
		.pipe(gulp.dest(settings.build+'/assets/'))
        .pipe(reload({stream:true})
    );
});


// minify images
gulp.task('images', function() {
  return gulp.src('src/images/**')
    .pipe(imagemin({
        optimizationLevel: 5,
        progressive: true,
        interlaced: true
    })).on('error', gutil.log)
    .pipe(gulp.dest('build/assets/images'));
});


// reload function
gulp.task('bs-reload', function () {
    browserSync.reload();
});


// browsersync
gulp.task('browser-sync', function() {
    browserSync.init([settings.build+'css/*.css', settings.build+'js/*.js'], {
        proxy: 'greenclick.dev',
		ghostMode: {
			scroll: false
		}
    });
});


gulp.task('default', ['build', 'browser-sync'], function () {
    gulp.watch([settings.source+'/js/**/*.js'], ['lint', 'js']);
    gulp.watch([settings.source+'/scss/**/*.scss', settings.source+'/css/**/*.css'], ['css'], reload);
    gulp.watch([settings.source+'/*.html'], ['bs-reload']);
});

gulp.task('build', ['lint', 'js', 'css', 'browser-sync']);
