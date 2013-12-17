module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    uglify: {
      build: {
        src: ['js/jquery-1.7.1.min.js','js/jquery.ui.js','js/jquery.iosslider.js','js/jquery.isotope.min.js','js/jquery-css-transform.js','js/jquery-rotate.js','js/browserdetect.js','js/blurobjs.js','js/mainactions.js'],
        dest: 'js/min/master.min.js'
      }
    },
  sass: {                              // Task
    dist: {                            // Target
      options: {                       // Target options
        style: 'compressed'
      },
      files: {                         // Dictionary of files
        'main.css': 'main.scss',      // 'destination': 'source'
        'mobile.css': 'mobile.scss'
      }
    }
  },
  concat: {
    options: {
      separator: ' ',
    },
    dist: {
      src: ['main.css', 'mobile.css'],
      dest: 'master.css',
    },
  },
  watch: {
	  scripts: {
	    files: ['js/*.js'],
	    tasks: ['uglify']
	    
	  },
	  css: {
	    files: '**/*.scss',
	    tasks: ['sass','concat']
	    
	  }
	}
    
  });
  grunt.event.on('watch', function(action, filepath, target) {
  grunt.log.writeln(target + ': ' + filepath + ' has ' + action);
});

  // Load the plugin that provides the "uglify" task.
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-watch');
  

  // Default task(s).
  grunt.registerTask('default', ['uglify']);
  grunt.registerTask('default', ['sass']);
  grunt.registerTask('default', ['concat']);
  grunt.registerTask('default', ['watch']);
  
 

};