module.exports = function(grunt) {

	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),

		concat: {
			dist: {
				src: [
					'js/bootstrap.min.js',
					'js/jquery-1.11.0.js',
					'js/main.js'
				],
				dest: 'js/production.js',
			}
		},

		uglify: {
			build: {
				src: 'js/production.js',
				dest: 'js/production.min.js'
			}
		},

		stylus: {
			compile: {
				files: {
					'css/style.css': 'css/style.styl'
				}
			}
		},

		cssmin: {
			add_banner: {
				options: {
					banner: '/* Last Time UW Beat UW - Bootstrap v3.2.0 - normalize.css v3.0.1 - Start Bootstrap - Stylish Portfolio Bootstrap Theme*/',
					keepSpecialComments: '0'
				},
				files: {
					'css/production.min.css': ['css/bootstrap.min.css','css/stylish-portfolio.css', 'css/style.css']
				}
			}
		},

		htmlhint: {
			html1: {
				options: {
					'tag-pair': true
				},
				src: ['html.php']
			}
		},

		watch: {
			options: {
				livereload: true,
			},
			scripts: {
				files: ['js/main.js'],
				tasks: ['concat','uglify'],
				options: {
					spawn: false,
				}
			},
			css: {
				files: ['css/style.styl'],
				tasks: ['stylus','cssmin'],
				options: {
					spawn: false,
				}
			},
			html: {
				files: ['index.php'],
				tasks: ['htmlhint'],
				options: {
					spawn: false,
				}
			}
		}

	});

	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-stylus');
	grunt.loadNpmTasks('grunt-contrib-cssmin');
	grunt.loadNpmTasks('grunt-htmlhint');
	grunt.loadNpmTasks('grunt-contrib-watch');

	grunt.registerTask('default', ['concat','uglify','stylus','cssmin','htmlhint','watch']);
};