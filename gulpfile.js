var gulp       = require('gulp');
var htmlhint = require("gulp-htmlhint");

gulp.task('Валидатор_HTML', function() {
	return gulp.src("../index.html")
		.pipe(htmlhint());
});