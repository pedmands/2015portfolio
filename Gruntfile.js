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
					'compiled/style.css': 'sass/style.scss'
				} // files
			}, // dev
			dist: {
				options: {
					style: 'compressed',
					sourcemap: 'none',
				}, // options
				files: {
					'compiled/style-min.css': 'sass/style.scss'
				} // files
			} // dev
		}, // sass

		watch: {
			css: {
				files: '**/*.scss',
				tasks: ['sass']
			}// css
		}// watch

	}); //initConfig

	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.registerTask('default', ['watch']);

}