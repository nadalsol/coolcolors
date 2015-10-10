module.exports = function(grunt) {

  // 1. All configuration goes here 
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    // 2. Configuration for concatinating, minifing... files goes here.
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
    }

  });

  // 3. Where we tell Grunt we plan to use this plug-in.
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  // grunt.loadNpmTasks('grunt-contrib-watch');

  // 4. Where we tell Grunt what to do when we type "grunt" into the terminal.
  grunt.registerTask('default', ['concat', 'uglify']);

};
