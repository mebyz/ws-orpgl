module.exports = function(grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        uglify: {
            default: {
            }
        },

        cssmin: {
            default: {
            }
        },
	shell: {
            options: {
                stderr: false
            },
            target: {
                command: 'bower --allow-root install &&  mkdir -p web/js2 && rm -rf web/js2/* && mv -f bower_components/** web/js2/'
            }
        }
    });

    // Ici on indique quel plugin on utilise
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-shell');
    grunt.registerTask('default', ['shell','uglify', 'cssmin']);
};
