
import gulp from 'gulp';
import gutil from 'gulp-util';
import babel from 'gulp-babel';

import uglify from 'gulp-uglify';
import cleanCSS from 'gulp-clean-css';
import del from 'del';


const DIR = {
    SRC: 'assets',
    DEST: 'dist'
};

const SRC = {
    JS: DIR.SRC + '/js/*.js',
    CSS: DIR.SRC + '/style/*.css',
};

gulp.task('clean', () => {
    return del.sync([DIR.DEST]);
});

gulp.task('js', () => {
    return gulp.src(SRC.JS)
        .pipe(babel({
            presets: ['es2015']
        }))
        .pipe(uglify())
        .pipe(gulp.dest(DIR.DEST));
});

gulp.task('css', () => {
    return gulp.src(SRC.CSS)
           .pipe(cleanCSS({compatibility: 'ie8'}))
           .pipe(gulp.dest(DIR.DEST));
});

gulp.task('watch', () => {
    gulp.watch(SRC.JS, ['js']);
    gulp.watch(SRC.CSS, ['css']);
});


gulp.task('default', ['clean', 'js', 'css', 'watch'], () => {
    gutil.log('Gulp is running');
});