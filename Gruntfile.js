module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    watch: {
      options: {
        livereload: true
      },
      files: [
        'assets/src/**'
      ],
      tasks: ['default']
    },
    sass: {
      build: {
        options: {
          style: 'expanded',
          compass: true
        },
        files: [
          {
            expanded: true,
            src: ['assets/src/scss/application.scss'],
            dest: 'assets/build/stylesheets/application.css',
            filter: 'isFile'
          }
        ]
      }
    },
    clean: {
      files: [
        'assets/build/stylesheets/application.css',
        'assets/build/javascript/application.js'
      ]
    },
    copy: {
      main: {
        expand: true,
        src: ['assets/src/images/*'],
        dest: 'assets/build/images',
        filter: 'isFile',
        flatten: true
      }
    },
    cssmin: {
      minify: {
        expand: true,
        cwd: 'assets/build/stylesheets/',
        src: [
          'application.css'
        ],
        dest: 'assets/build/stylesheets/',
        ext: '.min.css'
      }
    },
    concat: {
      build: {
        src: [
          'assets/src/components/html5shiv/src/html5shiv.js',
          'assets/src/components/respond/respond.src.js'
        ],
        dest: 'assets/build/javascript/application.js'
      }
    },
    uglify: {
      options: {
        banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */\n'
      },
      build: {
        src: 'assets/build/javascript/application.js',
        dest: 'assets/build/javascript/application.min.js'
      }
    },
    bumpup: ['package.json', 'bower.json'],
    tagrelease: {
      file: 'package.json',
      commit:  true,
      message: 'Release %version%',
      prefix:  '',
      annotate: false
    }
  });

  grunt.loadNpmTasks('grunt-contrib');
  grunt.loadNpmTasks('grunt-tagrelease');
  grunt.loadNpmTasks('grunt-bumpup');

  // Default task(s).
  grunt.registerTask('default', ['sass', 'copy', 'concat']);
  grunt.registerTask('release', function (type) {
    type = type ? type : 'patch';
    grunt.task.run('default');
    grunt.task.run('cssmin');
    grunt.task.run('clean');
    grunt.task.run('uglify');
    grunt.task.run('bumpup:' + type);
    grunt.task.run('tagrelease');
  });
};