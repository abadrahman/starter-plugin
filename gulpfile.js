var gulp   = require('gulp'),
    sass   = require('gulp-sass'),
    jshint = require('gulp-jshint'),
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify'),
    rename = require('gulp-rename'),
    pot    = require('gulp-wp-pot'),
    sort   = require('gulp-sort'),
    token  = require('gulp-token-replace'),
    cleanCSS = require('gulp-clean-css'),
    batch = require('gulp-batch'),
    watch = require('gulp-watch');

var pluginTokens = require('./settings.json');

// Token replacements
gulp.task('tokens', function() {
  return gulp.src(['./src/**/*.php', './src/README.*','./src/assets/**/*','./src/gulpfile.js'], {base: "./src/"})
    .pipe(token({global:pluginTokens}))
    .pipe(rename(function(path) {
      if (path.dirname == 'classes') {
        path.basename = path.basename.replace('PLUGIN', pluginTokens.plugin.package);
      }
      else {
        path.basename = path.basename.replace('PLUGIN', pluginTokens.plugin.slug);
      }
    }))
    .pipe(gulp.dest('./plugin-build/' + pluginTokens.plugin.slug));
});

// Create .pot file for translations
gulp.task('l18n', ['tokens'], function() {
  return gulp.src(['plugin-build/*.php', './plugin-build/**/*.php'])
  		.pipe(sort())
  		.pipe(pot({
  			domain:  pluginTokens.plugin.slug,
  			headers: false
  		}))
  		.pipe(gulp.dest('./plugin-build/' + pluginTokens.plugin.slug + '/languages'));
});

// Build Directory
gulp.task('src', function() {
  return gulp.src(['./src/**', '!./src/**/*PLUGIN*'], {base: "./src/"})
    .pipe(gulp.dest('./plugin-build/' + pluginTokens.plugin.slug))
});

// Deploy to Dev
gulp.task('dev', ['src'], function() {
  return gulp.src('./plugin-build/' + pluginTokens.plugin.slug + '/**')
  .pipe(gulp.dest(pluginTokens.plugin.dev + pluginTokens.plugin.slug, {overwrite: true}));
});


gulp.task('default', ['src', 'tokens', 'dev']);

gulp.task('watch', function () {
    watch('**/*.js', batch(function (events, done) {
        gulp.start('default', done);
    }));
});
