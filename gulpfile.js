"use strict";

var gulp = require('gulp');
var PATHS = {
  pkg: [
    '**/*',
    '!**/node_modules/**',
    '!**/gulpfile.js',
    '!**/package.json'
  ]
};

// Copy to WP Testing Installation
gulp.task('copytotest', function() {
  gulp.src(PATHS.pkg)
    .pipe(gulp.dest('/xampp/htdocs/testing/wp-content/themes/averylane'));
});
