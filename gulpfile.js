// npm uninstall `ls -1 node_modules | tr '/\n' ' '`

const env = {
    prod: false,
    node: 'node_modules/',
    tinyPNGAPIKey: 'yKyolNa3zIIMYqa5Ziz63pTTdntLbYi9',
};

if (env.prod) {
    env.task = {
        js: 'jsprod',
        css: 'stylusprod'
    }
} else {
    env.task = {
        js: 'jsdev',
        css: 'stylusdev'
    }
}

var gulp = require('gulp'),
    stylus = require('gulp-stylus'),
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify'),
    postcss = require('gulp-postcss'),
    sourcemaps = require('gulp-sourcemaps'),
    packer = require('css-mqpacker'),
    prefixes = require('autoprefixer'),
    cssnano = require('cssnano'),
    pump = require('pump'),
    tinypng = require('gulp-tinypng-compress'),
    babel = require('gulp-babel');

/*
* Only CSS | Stylus
* */
const stylFiles = [
    'src/stylus/*.styl'
];

const cssDestPath = 'src/css';

gulp.task('stylusdev', function () {
    return gulp.src(stylFiles)
        .pipe(stylus({
            'include css': true
        }))
        .pipe(gulp.dest(cssDestPath))
});

gulp.task('stylusprod', function () {
    const processors = [
        prefixes({
            browsers: ['last 4 versions']
        }),
        packer(),
        cssnano({
            zindex: false,
            reduceIdents: false
        }),
    ];
    return gulp.src(stylFiles)
    // Style processor
        .pipe(stylus({
            'include css': true
        }))
        // Transpile webkit, -moz-, etc
        .pipe(postcss(processors))
        // Minificar
        .pipe(uglify())
        // path destination of final file
        .pipe(gulp.dest(cssDestPath))
});

gulp.task('css', function () {
    return gulp.src(['src/css/main.css', env.node + 'animate.css/animate.css'])
        .pipe(concat('main.css'))
        .pipe(gulp.dest('dist/css/'))
});

gulp.task('stylus', gulp.series(env.task.css, 'css'));

/*
* End only CSS
* */

/*
* Only JavaScript
* */
const babelOpts = {
    presets: ['@babel/env'],
    "plugins": [
        ["@babel/plugin-proposal-class-properties", {"loose": true}]
    ]
};

const jsFiles = [
    env.node + 'jquery/dist/jquery.slim.js',
    'src/js/**/*.js',
    env.node + 'slick-carousel/slick/slick.js',
    env.node + 'jquery-mask-plugin/dist/jquery.mask.js'
];

const   jsAppFileName   = 'index.js',
        jsDestPath      = 'dist/js/';

gulp.task('jsprod', function (done) {
    pump([
        gulp.src(jsFiles)
            .pipe(concat(jsAppFileName))
            .pipe(babel(babelOpts)),
        uglify(),
        gulp.dest(jsDestPath)
    ], done)
});

gulp.task('jsdev', function (done) {
    pump([
        gulp.src(jsFiles).pipe(babel(babelOpts)),
        concat(jsAppFileName),
        gulp.dest(jsDestPath)
    ], done)
});
/*
* End only Javascript
* */

/*
* For compress image
* */

gulp.task('tinypng', function () {
    gulp.src('src/images/**/*.{png,jpg,jpeg}')
        .pipe(tinypng({
            key: env.tinyPNGAPIKey,
            sigFile: 'images/.tinypng-sigs',
            log: true
        }))
        .pipe(gulp.dest('dist/images'));
});
/*
* End compress image
* */

gulp.task('copy_node', function(done) {
   return pump([
        gulp.src([
            'node_modules/jquery/dist/jquery.min.js',
            'node_modules/systemjs/dist/system.min.js',
            'node_modules/slick-carousel/slick/slick.min.js',
        ]),
        gulp.dest(jsDestPath + '/libs')
    ], done);
});


gulp.task('watch', function (done) {
    gulp.watch('src/stylus/**/*.styl', gulp.series('stylus'));
    gulp.watch('src/js/**/*.js', gulp.series(env.task.js));
    gulp.watch('src/images/**/*.{png,jpg,jpeg}', gulp.series('tinypng'));
    done();
});

gulp.task('default', gulp.series('watch'), 'stylus', env.task.js, env.task.css);
