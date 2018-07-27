var gulp = require('gulp');

gulp.task('default', function(){
    gulp.src('/css/*.scss')
        .pipe(sass())
        .pipe(gulp.dest('/css'));
})