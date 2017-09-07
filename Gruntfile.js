module.exports = function(grunt) {
    grunt.initConfig({
        // Let's combine all our JS files into one
        concat: {
            // Front-end
            main: {
                src: [
                    'js/velocity.js',
                    'js/classie.js',
                    'js/scripts.js'
                ],
                dest: 'js/concat/all-scripts.js'
            },
        },
        // Let's minimize our JS files
        uglify: {
            // Front-end
            main: {
                src: 'js/concat/all-scripts.js',
                dest: 'js/min/all-scripts.min.js'
            }
        },
        //  Let's compile our SASS into CSS
        sass: {
            dist: {
                options: {
                    style: 'expanded'
                },
                files: {
                    'css/style.css': 'scss/style.scss',
                    'css/ie.css': 'scss/ie.scss'
                }
            }
        },
        // Let's provide our users a minified version of all our CSS files
        // This is done when you're ready to provide a final version copy
        cssmin: {
            target: {
                files: [
                    {
                        expand: true,
                        cwd: 'css/',
                        src: ['*.css', '!*.min.css'],
                        dest: 'css/min/',
                        ext: '.min.css'
                    }
                ]
            }
        },
        // Autoprefix and other polyfills
        postcss: {
            options: {
                syntax: require('postcss-scss'), // work with SCSS directly
                processors: [
                    require('autoprefixer')({ browsers: '> 5%, last 2 versions, Firefox ESR, Opera 12.1' }),
                    // require('pixrem')()
                ]
            },

            dist: {
                src: 'scss/**/*.scss'
            }
        },
        // Let's optimize our images and SVG files
        imagemin: {
            dynamic: {
                options: {
                    optimizationLevel: 7
                },
                files: [
                    {
                        expand: true,
                        cwd: './images/',
                        src: ['**/*.{png,jpg,jpeg,gif}'],
                        dest: './images/min'
                    }
                ]
            }
        },

        // SVG Icon Library
        svg_sprite: {
            complex: {
                // Target basics
                expand: true,
                cwd: 'svg/',
                src: ['**/*.svg'],
                dest: 'images/svg',

                // Target options
                options: {
                    shape: {
                        dimension: {
                            // Set maximum dimensions
                            maxWidth: 30,
                            maxHeight: 30
                        },
                        spacing: {
                            // Add padding
                            padding: 5
                        },
                        dest: 'original_svgs/' // Keep the intermediate files
                    },
                    mode: {
                        view: {
                            // Activate the «view» mode
                            bust: false,
                            render: {
                                scss: true // Activate Sass output (with default options)
                            }
                        },
                        symbol: true // Activate the «symbol» mode
                    }
                }
            }
        },
        // Watch our files while we work
        watch: {
            css: {
                files: ['scss/**/*.scss'],
                tasks: ['sass', 'newer:postcss'],
                options: {
                    spawn: false
                }
            },

            scripts: {
                files: [
                    'js/classie.js',
                    'js/scripts.js'
                ],
                tasks: ['concat'],
                options: {
                    spawn: false
                },
            },
        }
    });

    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-postcss');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-imagemin');
    grunt.loadNpmTasks('grunt-svg-sprite');
    grunt.loadNpmTasks('grunt-newer');

    // Development workflow
    grunt.registerTask('default', [
        'concat',
        'uglify',
        'newer:sass',
        'newer:postcss',
        'newer:cssmin',
        'watch'
    ]);

    // SVG Icons
    grunt.registerTask('svg', ['svg_sprite']);
};
