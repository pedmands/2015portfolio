module.exports = function(grunt){

	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),

		sass: {
			dev: {
				options: {
					style: 'expanded',
					sourcemap: 'none',
				}, // options
				files: {
					'compiled/style-human.css': 'sass/style.scss'
				} // files
			}, // dev
			dist: {
				options: {
					style: 'compressed',
					sourcemap: 'none',
				}, // options
				files: {
					'compiled/style.css': 'sass/style.scss'
				} // files
			} // dev
		}, // sass

		autoprefixer: {
			options: {
				browsers: ['last 2 versions']
			}, // options
			multiple_files: {
				expand: true,
				flatten: true,
				src: 'compiled/*.css',
				dest: ''
			} // multiple_files
		}, // autoprefixer

		watch: {
			css: {
				files: '**/*.scss',
				tasks: ['sass', 'autoprefixer']
			}// css
		}// watch

	}); //initConfig

	grunt.loadNpmTasks('grunt-autoprefixer');
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.registerTask('default', ['watch']);

}