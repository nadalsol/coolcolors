'use strict';
module.exports = function(grunt) {

  // 1. All configuration goes here 
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    // 2. Configuration files goes here (concatinating, minifing...)
    sass: {
      dev: {
        options: {
          style: 'compressed'
        },
        files: {
          'css/base.css': 'sass/base.scss'
        }
      }
    },
    concat: {
      dist: {
        src: [
          'js/libs/jquery/*.js',
          'js/libs/bootstrap/*.js',
          'js/*.js'
        ],
        dest: 'js/build/production.js'
      }
    },
    uglify: {
      build: {
        src: 'js/build/production.js',
        dest: 'js/build/production.min.js'
      }
    },
    watch: {
      stylesheets: {
        files: ['sass/**/*.{sass,scss,css}'],
        tasks: ['sass:dev']
      },
      js: {
        files: ['js/**/*.js'],
        tasks: ['concat']
      }
    }

  });

  // 3. Where we tell Grunt we plan to use this plug-in.
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');

  // 4. Where we tell Grunt what to do when we type "grunt" into the terminal.
  grunt.registerTask('default', ['concat', 'uglify', 'watch']);

};
