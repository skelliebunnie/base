// DON'T FORGET TO GIT INIT! //
// Oh, and change the PROXY.
var PROXY, PORT;
PROXY = 'base.framework';
PORT = 3000;

// requires
var gulp = require('gulp'),
		sass = require('gulp-sass'),
		postcss = require('gulp-postcss'),
		autoprefixer = require('autoprefixer'),
		sourcemaps = require('gulp-sourcemaps'),
		wait = require('gulp-wait'),
		jshint = require('gulp-jshint'),
		concat = require('gulp-concat'),
		rename = require('gulp-rename'),
		uglify = require('gulp-uglify'),
		image = require('gulp-image'),
		newer = require('gulp-newer'),
		browserSync = require('browser-sync');

const server = browserSync.create();

const paths = {
	styles: {
		src: 'src/styles/**/*.scss',
		dest: 'public/assets/css'
	},
	scripts: {
		src: 'src/scripts/**/!(_)*.js',
		dest: 'public/assets/js'
	},
	images: {
		src: 'src/images/**/!(_)*.{jpg,JPG,jpeg,JPEG,png,PNG}',
		dest: 'public/assets/img'
	},
	public:'public/**/*.{html,php}'
}

// SCSS => CSS task
gulp.task('styles', function() {
	var styles = gulp.src(paths.styles.src)
		.pipe(wait(35))
		.pipe(sass({
			outputStyle: 'nested',
			//indentType: 'tab',
			// indentWidth: '1'
		}).on('error', sass.logError))
		.pipe(postcss([
			autoprefixer('last 2 versions', '> 1%')
		]))
		.pipe(gulp.dest(paths.styles.dest))
		.pipe(browserSync.stream());

	return styles;
});

// Minify + Uglify scripts
gulp.task('scripts', function() {
	var scripts = gulp.src(paths.scripts.src)
			.pipe(jshint())
			.pipe(jshint.reporter('default'))
			.pipe(concat('app.js'))
			.pipe(gulp.dest(paths.scripts.dest))
				.pipe(rename('app.min.js'))
	    	.pipe(uglify())
	    	.pipe(gulp.dest(paths.scripts.dest));

	return scripts;
});

// compress images
gulp.task('images', function() {
	var images = gulp.src(paths.images.src)
			.pipe(newer(paths.images.dest))
			.pipe(image())
			.pipe(gulp.dest(paths.images.dest));

	return images;
});

function reload(done) {
	server.reload();
	done();
}

function serve(done) {
	server.init({
		open: 'external',
		port: PORT,
		proxy: PROXY,
		files: ['public/**/*'],
		//injectChanges: true,
		//notify: false
	});

	console.log('Watching '+ PROXY +' on port' + PORT);
	done();
}

// Watch task
gulp.task('watch', function() {
	gulp.watch(paths.styles.src, gulp.series('styles'));
	gulp.watch(paths.scripts.src, gulp.series('scripts', reload));
	gulp.watch(paths.images.src, gulp.series('images', reload));
	gulp.watch(paths.public, gulp.series(reload));
});

// Set 'watch' as default task
gulp.task('default', gulp.series(serve, 'watch'));