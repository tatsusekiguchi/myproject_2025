const gulp = require("gulp");
const sass = require("gulp-sass")(require("sass"));
const pug = require("gulp-pug");
const browserSync = require("browser-sync");
const beautify = require("gulp-beautify");
const cache = require("gulp-cache");
const imagemin = require("gulp-imagemin");

// imageminプラグインの個別読み込み
const gifsicle = require("imagemin-gifsicle");
const mozjpeg = require("imagemin-mozjpeg");
const optipng = require("imagemin-optipng");
const svgo = require("imagemin-svgo");

gulp.task("browser-sync", function () {
  browserSync.init({
    server: {
      baseDir: "./public",
      index: "index.html",
    },
  });
});

gulp.task("reload", function (done) {
  browserSync.reload();
  done();
});

gulp.task("css", function () {
  return gulp
    .src("./src/sass/*.scss")
    .pipe(sass({ outputStyle: "expanded" }))
    .pipe(gulp.dest("./public/css"));
});

gulp.task("pug", function () {
  return gulp
    .src("./src/pug/pages/**/*.pug")
    .pipe(
      pug({
        pretty: true,
        basedir: "./src/pug/",
      })
    )
    .pipe(beautify.html({ indent_size: 4, indent_with_tabs: true }))
    .pipe(gulp.dest("./public"));
});

gulp.task("image", () => {
  return gulp
    .src("./src/image/**/*.{png,jpg,jpeg,gif,svg}")
    .pipe(
      cache(
        imagemin([
          gifsicle({ interlaced: true }),
          mozjpeg({ quality: 75, progressive: true }),
          optipng({ optimizationLevel: 5 }),
          svgo({ plugins: [{ removeViewBox: false }, { cleanupIDs: false }] }),
        ])
      )
    )
    .pipe(gulp.dest("./public/image"));
});

gulp.task("watch", function () {
  gulp.watch("./src/pug/**/*.pug", gulp.series("pug"));
  gulp.watch("./src/sass/**/*.scss", gulp.series("css"));
  // gulp.watch("./src/image/**/*.{png,jpg,jpeg,gif,svg}", gulp.series("image"));
  gulp.watch(["./public/**", "!./public/image/**"], gulp.series("reload"));
});

gulp.task(
  "default",
  gulp.series(
    // gulp.parallel("pug", "css", "image"),
    gulp.parallel("pug", "css"),
    gulp.parallel("watch", "reload", "browser-sync"),
    function (done) {
      done();
    }
  )
);
