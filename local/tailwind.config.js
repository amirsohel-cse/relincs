const colors = require('tailwindcss/colors')
module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        colors: {
            sky: '#a0aec0',
            midsky: '#80b4be',
            transparent: 'transparent',
            current: 'currentColor',
            black: colors.black,
            white: colors.white,
            gray: colors.gray,
            indigo: colors.indigo,
            red: colors.rose,
            yellow: colors.amber,
            teal : colors.teal,
        },
    },


variants: {},

    plugins: [require('@tailwindcss/forms')],
};
