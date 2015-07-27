	module.exports = function(grunt){

	// without matchdep we would have to write out all our dependenciess
	require("matchdep").filterDev("grunt-*").forEach(grunt.loadNpmTasks);

	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		
		uglify: {
			build: {
				files: {
					'public/js/base.min.js': ['resources/assets/js/base.js']
				}
			}
		},

		sass: {                              // Task
			
			options: {                       
		        style: 'expanded',
		        cacheLocation: 'storage/.sass-cache'
		    },
			dist: {                            
			  files: {                         
			    'public/css/app.css': 'resources/sass/app.scss'       
				}
			}
		},

		cssmin: {
		    build: {
		        src: 'public/css/app.css',
		        dest: 'public/css/app.css'
		    }
		},
		
		watch: {
			options: {
		      livereload: true,
		    },
			js: {
				files: ['resources/assets/js/base.js'],
				tasks: ['uglify']
			},
			css: {
		        files: ['resources/assets/sass/**/*.scss'],
		        tasks: ['buildcss']
		    }
		}
	});

	grunt.registerTask('default', ['sass', 'cssmin', 'uglify']);
	grunt.registerTask('buildcss',  ['sass']);
	grunt.registerTask('mincss',  ['cssmin']);
	grunt.registerTask('buildJs', ['uglify']);



};