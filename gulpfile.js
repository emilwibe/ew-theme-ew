const
  gulp = require("gulp"),
  sass = require("gulp-sass"),
  cleanCSS = require("gulp-clean-css"),
  concatCSS = require("gulp-concat-css"),
  autoprefixer = require("gulp-autoprefixer"),
  cssimport = require("gulp-cssimport"),
  rename = require("gulp-rename"),
  paths = {
    scss: [
      "./src/css/base.scss",
      "./src/css/layout.scss",
      "./src/css/grid.scss",
      "./src/css/modules.scss",
      "./src/css/state.scss",
      "./src/css/theme.scss"
    ],
    grid: [
      "./src/css/grid/_grid-core.css"
    ]
  }
;
sass.compiler = require("node-sass");

gulp.task('css', function(){
  return gulp.src(paths.scss)
    .pipe(concatCSS("core.css"))
    .pipe(sass().on("error", sass.logError))
    .pipe(autoprefixer({
      browsers: ["cover 99.5% in DK"], /*https://github.com/browserslist/browserslist*/
      cascade: false
    }))
    .pipe(cleanCSS({compatibility: "*"}))
    .pipe(gulp.dest("./dist/css"))
});

gulp.task("grid", function(){
  return gulp.src(paths.grid)
    .pipe(cssimport())
    .pipe(rename("grid.scss"))
    .pipe(gulp.dest("./src/css"))
});