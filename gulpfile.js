// gulpプラグインの読み込み
const gulp = require("gulp");
// Sassをコンパイルするプラグインの読み込み
const sass = require("gulp-sass")(require("sass"));

gulp.task("default", function(done){
  gulp.src("./src/sass/**/*.scss")
  .pipe(sass({outputStyle: "expanded"}))
  .pipe(gulp.dest("./public/css"))
  done()
});
