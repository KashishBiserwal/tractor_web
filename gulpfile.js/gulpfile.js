const gulp = require("gulp");
const terser = require("gulp-terser");

// Minification task
gulp.task("minify-js", () => {
  return gulp.src("assets/js/**/*.js")  // Source folder with original JS files
    .pipe(terser())  // Minify JS using Terser
    .pipe(gulp.dest("minified/"));  // Destination folder for minified files
});

// Watch task for automatic minification on file change
gulp.task("watch", () => {
  gulp.watch("assets/js/**/*.js", gulp.series("minify-js"));  // Watches for changes in JS files
});

// Default task to run minification and watch
gulp.task("default", gulp.series("minify-js", "watch"));