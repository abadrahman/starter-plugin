var gulp = require('gulp');
var sass = require('gulp-sass');
var rename = require('gulp-rename');
var cleanCSS = require('gulp-clean-css');
var uglify = require('gulp-uglify');
var autoprefixer = require('gulp-autoprefixer');
var jshint = require('gulp-jshint');
var concat = require('gulp-concat');

// Variables

var sassOptions = {
    errLogToConsole: true,
    outputStyle: 'expanded'
};

var autoprefixerOptions = {
    browsers: ['last 2 versions', '> 5%', 'Firefox ESR']
};

//CSS
var inputAdminSass = './assets/styles/admin/**/*.scss';
var outputAdminSass = './admin/css';
var inputPublicSass = './assets/styles/public/**/*.scss';
var outputPublicSass = './public/css';

//JS
var inputAdminJS = './assets/scripts/admin/**/*.js';
var outputAdminJS = './admin/js';
var inputPublicJS = './assets/scripts/public/**/*.js';
var outputPublicJS = './public/js';


// Admin styles
gulp.task('sass-admin', function() {
    return gulp.src(inputAdminSass)
        .pipe(sass(sassOptions).on('error', sass.logError))
        .pipe(autoprefixer(autoprefixerOptions))
        // .pipe(gulp.dest(outputAdminSass))
        .pipe(cleanCSS({debug: true}, function(details) {
            console.log(details.name + ': ' + details.stats.originalSize);
            console.log(details.name + ': ' + details.stats.minifiedSize);
        }))
        .pipe(rename({ suffix: '.min' }))
        .pipe(gulp.dest(outputAdminSass))
});

// Public styles
gulp.task('sass-public', function() {
    return gulp.src(inputPublicSass)
        .pipe(sass(sassOptions).on('error', sass.logError))
        .pipe(autoprefixer(autoprefixerOptions))
        // .pipe(gulp.dest(outputPublicSass))
        .pipe(cleanCSS({debug: true}, function(details) {
            console.log(details.name + ': ' + details.stats.originalSize);
            console.log(details.name + ': ' + details.stats.minifiedSize);
        }))
        .pipe(rename({ suffix: '.min' }))
        .pipe(gulp.dest(outputPublicSass))
});

// Combined Sass task
gulp.task('sass', ['sass-admin', 'sass-public']);

// Admin scripts
gulp.task('admin-js', function () {
    return gulp.src(inputAdminJS)
        .pipe(jshint())
        .pipe(jshint.reporter('fail'))
        .pipe(concat('{{plugin.slug}}-admin.js'))
        // .pipe(gulp.dest(outputAdminJS))
        .pipe(rename({suffix: '.min'}))
        .pipe(uglify())
        .pipe(gulp.dest(outputAdminJS));
});

// Frontend scripts
gulp.task('public-js', function () {
    return gulp.src(inputPublicJS)
        .pipe(jshint())
        .pipe(jshint.reporter('fail'))
        .pipe(concat('{{plugin.slug}}-public.js'))
        // .pipe(gulp.dest(outputPublicJS))
        .pipe(rename({suffix: '.min'}))
        .pipe(uglify())
        .pipe(gulp.dest(outputPublicJS));
});

// Combined js task
gulp.task('js', ['admin-js', 'public-js']);


gulp.task('watch', function() {
    return gulp
    // Watch the input folder for change,
    // and run `sass` task when something happens
        .watch('./assets/**/*', ['sass-admin','sass-public'])
        // When there is a change,
        // log a message in the console
        .on('change', function(event) {
            console.log('File ' + event.path + ' was ' + event.type + ', running tasks...');
        });
});

gulp.task('default', ['sass', 'js'] );