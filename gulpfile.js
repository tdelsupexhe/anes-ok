'use strict';

var gulpfile = require('gulp');
var sass = require('gulp-sass');
var sassDirectory = './public/css/sass/**/style.scss';

gulpfile.task('sass', function () {
    return gulpfile.src(sassDirectory)
        .pipe(sass().on('error', sass.logError))
        .pipe(gulpfile.dest('./public/css/dist'));
});