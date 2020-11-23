const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors')

module.exports = {
    purge: [
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                'sans': ['Source Sans Pro', ...defaultTheme.fontFamily.sans],
                'serif': ['Lora', ...defaultTheme.fontFamily.serif],
            },
            backgroundColor: {
                'primary-dark': colors.trueGray["900"],
                'primary-light': colors.blueGray["100"],
                'secondary-dark': colors.trueGray["700"],
                'secondary-light': colors.blueGray['200'],
                'form-outline': colors.trueGray["200"],
                'accent-light': colors.blue["600"],
                'accent-dark': colors.blue["900"],
            },
            textColor: {
                'primary-dark': colors.trueGray["900"],
                'primary-light': colors.blueGray["50"],
                'secondary-dark': colors.trueGray["700"],
                'secondary-light': colors.blueGray['100'],
                'accent-light': colors.blue["600"],
                'accent-dark': colors.blue["900"],
            }
        },
        textColor: colors,
        backgroundColor: colors,
        colors: {
            gray: colors.trueGray,
        }
    },

    variants: {
        opacity: ['responsive', 'hover', 'focus', 'disabled'],
    },

    plugins: [
        require('@tailwindcss/ui'),
        require('@tailwindcss/forms'),
    ],
};
