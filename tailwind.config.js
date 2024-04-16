import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        colors: {
            background: '#191919',
            color: '#D8D9DA',
            accent: '#B784B7',
            accentHover: '#9290C3',
            headerBackground: '#151515',
            headerColor: '#E7BCDE',
            red: 'red',
            flashyButton: '#0079FF',
            lighten: '#202020',
            border:  '#B6C4B6',
            trash: '#DD5746',
            cast: '#31363F',
            castText: '#B6C4B6'
        },
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms],
};
