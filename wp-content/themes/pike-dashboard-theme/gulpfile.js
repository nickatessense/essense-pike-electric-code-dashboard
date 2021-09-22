const gulp = require('gulp'),
	  uglify = require('gulp-uglify')
	  sass  = require('gulp-sass')(require('sass'))
	  concat = require('gulp-concat')
	  cssnano = require('gulp-cssnano')
	  babel = require('gulp-babel');

// Compliling Sass
gulp.task('sass', function(){
	return gulp.src('assets/styles/scss/**/*.scss')
			.pipe( sass().on('error', sass.logError) )
			.pipe( concat('style.css') )
			.pipe( cssnano() )
			.pipe( gulp.dest('assets/styles/') );
});

// Compliling Scripts
gulp.task('scripts', function(){
	return gulp.src([
				'assets/scripts/js/*.js',
			])
			.pipe( concat('main.js') )
			.pipe(babel({
	            presets: ["@babel/preset-env"]
	        }))
			.pipe( uglify() )
			.pipe( gulp.dest('assets/scripts/') );
});


gulp.task('default',  gulp.series('scripts', 'sass'));

gulp.task('watch', function(){
	gulp.watch('assets/scripts/js/**/*.js', gulp.series('scripts'));
	gulp.watch('assets/styles/scss/**/*.scss', gulp.series('sass'));
});