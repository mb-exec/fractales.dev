const IS_PROD = process.env.NODE_ENV === 'production';
const { serverUrl } = require('./config');
const gitDeployBuild = require('./gitDeploy');

const destPath = IS_PROD ? '../.build/assets/' : '../assets/';

const { src, dest, watch, series, parallel, lastRun } = require('gulp');

const del = require('del');
const browserSync = require('browser-sync').create();
const combine = require('stream-combiner2').obj;
const gulpIf = require('gulp-if');
const hash = require('gulp-hash-filename');

const HASH_OPTIONS = {
  format: '{name}-{hash:5}{size}{ext}',
};

// css libs
const sass = require('gulp-sass')(require('sass'));
const gcmq = require('gulp-group-css-media-queries');
const csso = require('gulp-csso');

// js libs
const include = require('gulp-include');
const uglify = require('gulp-uglify-es').default;

// fonts/imgs libs
const ttfToWoff = require('gulp-ttf-to-woff');
const webp = require('gulp-webp');

function styles() {
  // return src('./src/scss/*.scss', {since: lastRun(styles)})
  return src('./src/scss/**/*.scss')
    .pipe(sass())
    .pipe(gulpIf(IS_PROD, combine(gcmq(), csso(), hash(HASH_OPTIONS))))
    .pipe(dest(destPath + 'css'));
}

function scripts() {
  // return src(['./src/js/*.js', './src/js/vendor/*.js'], {since: lastRun(scripts)})
  return src(['./src/js/*.js', './src/js/vendor/*.js'])
    .pipe(include())
    .pipe(gulpIf(IS_PROD, combine(uglify(), hash(HASH_OPTIONS))))
    .pipe(dest(destPath + 'js'));
}

function fonts() {
  src('./src/fonts/*.ttf')
    .pipe(ttfToWoff())
    .pipe(dest(destPath + 'fonts'));

  return src('./src/fonts/*.woff').pipe(dest(destPath + 'fonts'));
}

const webpOptions = IS_PROD ?  { method: 6 } : { method: 0 };

function images() {
  return src('./src/img/**/*.{svg,png,jpg,jpeg,webp}', { since: lastRun(images) })
    .pipe(dest(destPath + 'img'))
    .pipe(webp(webpOptions))
    .pipe(dest(destPath + 'img'));
}

function serve() {
  browserSync.init({
    proxy: serverUrl,
    notify: false,
  });

  watcher(['./src/scss/**/*.scss'], styles);
  watcher(['./src/js/**/*.js'], scripts);
  watcher(['./src/img/**/*.{svg,png,jpg,jpeg,webp}'], images);
  watcher(['./src/fonts/*.*'], fonts);
  watcher(['../**/*.php']);

  function watcher(globs, cb = null) {
    watch(globs, cb).on('change', browserSync.reload);
  }
}

function clean() {
  const path = IS_PROD ? '../.build/' : '../assets/';
  return del(path + '*/', { force: true });
}

function php() {
  return src(['../**/*.php', '../.htaccess']).pipe(dest('../.build'));
}

function fav() {
  return src('../fav/**/*').pipe(dest('../.build/fav'));
}

exports.dev = series(clean, parallel(styles, scripts, images, fonts), serve);
exports.build = series(clean, parallel(styles, scripts, images, fonts, php, fav));
exports.deploy = gitDeployBuild;
