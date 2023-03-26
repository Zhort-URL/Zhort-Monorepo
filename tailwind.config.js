const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require("tailwindcss/colors.js");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        colors: {
            transparent: 'transparent',
            current: 'currentColor',
            black: colors.black,
            white: colors.white,
            red: colors.red,
            'zhort': {
                darkish: '#51517B',
                dark: '#30304B',
                darker: '#232338',
                gray: '#E8E9F0',
                grayer: '#B9BABF',
                primary: '#C257E1',
                secondary: '#949FE0'
            }
        },
        extend: {
            fontFamily: {
                sans: ['Inconsolata', ...defaultTheme.fontFamily.sans],
                'karla': ['Karla', 'sans-serif']
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
