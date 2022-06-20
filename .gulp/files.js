module.exports = {
    styles: {
        input: [
            "./styles/*.scss",
            "./styles/pages/*.scss"
        ],
        watch: [
            "./styles/*.scss",
            "./styles/**/*.scss"
        ],
        output: {
            prod: "./dist/css/prod",
            dev: "./dist/css/dev"
        }
    },
    scripts: {
        vendor: [
            "./scripts/vendor/jquery.arcticmodal.min.js",
            "./scripts/vendor/jquery.scrollTo.min.js",
            "./scripts/vendor/jquery.maskedinput.min.js",
            "./scripts/vendor/swiper-bundle.min.js"
        ],
        inline: [
            "./scripts/inline/jquery-3.6.0.min.js",
            "./scripts/inline/viewport.js"
        ],
        entries: {
            input: [
                "./scripts/*.js",
                "./scripts/pages/*.js"
            ],
            watch: "./scripts/**/*.js"
        },
        output: "./dist/js"
    },
    php: [
        "./index.php",
        "./php/**/*.php",
        "./views/**/*.tpl"
    ],
    images: "./img/**/*.{jpg,png,webp,svg}"
};
