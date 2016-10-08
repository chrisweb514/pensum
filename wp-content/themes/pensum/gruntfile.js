module.exports = function(grunt) {

    var SRC_CSS   = 'assets/css/';
    var SRC_JS    = 'src/js/';
    var BUILD_CSS = 'assets/css/';
    var BUILD_JS  = 'js/';

    grunt.initConfig({

        less: {
             development: {
                 options: {
                     paths: ["assets/app/css"]
                 },
                 files: {"assets/app/css/style.css":
                  [
                    'assets/app/css/style.less',
                    //'assets/app/css/loader.less'
                  ]
                }
             },
         },
         cssmin: {
          options: {
            shorthandCompacting: false,
            roundingPrecision: -1
          },
          target: {
            options: {
              //banner: '/* My minified css file */'
            },
            files: {
              'assets/dist/style.min.css':
              [
                'assets/app/vendor/foundation-sites/dist/foundation.css',
                'assets/app/vendor/motion-ui/dist/motion-ui.min.css',
                'assets/app/css/style.css',
                'assets/app/css/youtube.css',
                'assets/app/vendor/pace/pace.css',
                'assets/app/vendor/datepicker/css/foundation-datepicker.css',
                // Fonts
                'assets/app/fontello/css/animation.css',
                'assets/app/fontello/css/fontello.css',
                'assets/font/gotham/stylesheet.css'
              ],

              'assets/dist/login.min.css':
              [
                'assets/app/css/login.css',
              ]
            }
          }
        },
         concat: {
            options: {
              separator: ';',
            },
            dist: {
              src: [
                'assets/app/vendor/jquery.backstretch.min.js',
                'assets/app/js/foundation.min.js',
                'assets/app/vendor/jquery.vimeo.api.js',
                'assets/app/vendor/modernizr.js',
                'assets/app/vendor/foundation-sites/js/foundation.interchange.js',
                //'assets/app/vendor/foundation-sites/js/foundation.abide.js',
                //'assets/app/vendor/foundation-sites/js/foundation.reveal.js',
                'assets/app/vendor/pace/pace.min.js',
                'assets/app/vendor/what-input/what-input.min.js',
                'assets/app/vendor/jquery.youtubebackground.js',
                'assets/app/vendor/typed/typed.js',
                'assets/app/vendor/datepicker/foundation-datepicker.js',
                'assets/app/vendor/vide/jquery.vide.js',
                'assets/app/vendor/gmaps.js',
                //'assets/app/js/map.js',
              //  'assets/app/vendor/jquery/dist/jquery.min.js',
                //'assets/app/js/credit.js',
                'assets/app/js/main.js'
              ],
              dest: 'assets/app/js/scripts.js',
            },
            css: {
              src: [
                //'assets/app/css/credit.css',
                'assets/dist/style.min.css'
              ],
              dest: 'assets/dist/style.min.css'
            }
          },
          uglify: {
            my_target: {
              files: {
                'assets/dist/scripts.min.js': ['assets/app/js/scripts.js']
              }
            }
          },
          jshint: {
            //beforeconcat: ['assets/js/*.js'],
            afterconcat: ['assets/dist/scripts.min.js']
          },

          watch: {

            all: {
              files: [
                'gruntfile.js',
                'assets/app/js/main.js',
                'assets/app/js/credit.js',
                'assets/app/js/map.js',
                'assets/app/vendor/*.js',
                'assets/app/fontello/css/fontello.css',
                'assets/app/css/login.css',
                'assets/fonts/gotham/stylesheet.css',
                // Select which grid system you want to use (Foundation Grid by default)
                'assets/app/vendor/foundation-sites/dist/foundation.css',
                //'assets/app/vendor/foundation-sites/dist/foundation-flex.min.css',
              ],
              tasks: ['default'],

            },
            less: {
              // We watch and compile sass files as normal but don't live reload here
              files: [
                'assets/app/css/*.less',
              ],
              tasks: ['compilecss'],
            }

          },

     });

    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-bell');

    grunt.registerTask('default', ['less', 'cssmin', 'concat', 'uglify', 'bell']);
    grunt.registerTask('compilecss', ['less', 'cssmin',  'bell']);
    grunt.loadNpmTasks('grunt-contrib-watch');

};
