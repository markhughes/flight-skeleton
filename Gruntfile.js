module.exports = function(grunt) {

    require("load-grunt-tasks")(grunt);

    grunt.initConfig({
        sass: {
            options: {
                sourceMap: true,
                outputStyle: "compressed"
            },
            dist: {
                files: {
                    "public/resources/compiled/compiled.css": "app/resources/scss/main.scss"
                }
            }
        }
    });

    grunt.registerTask("default", ["sass"]);

};