import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'custom-gray': '#505050',
                'yellow': '#FFFCE0',
                'orange': '#F4A500',
                'cerise': '#EF3062',
                'menthe': '#2EB778',
                'bleu': '#6652FF',
                'gris': '#505050',
                'noir': '#0E0E0E',
                'fushia': '#E910C6',
                'opa-bleu': 'rgba(102, 82, 255, 0.75)',
                'opa-orange': 'rgba(247, 192, 63, 0.75)',
                'opa-menthe': 'rgba(72, 227, 156, 0.75)',
                'opa-cerise': 'rgba(239, 48, 98, 0.20)',
                'cerise-background': '#F5D0DA',
                'gris-bg-input' : '#EFEFEF',
                'orange-background' : '#FFFCE0',
                'bg-search' : '#EFEFEF',
                'bleu-background' : '#E1DDFC',
                'menthe-background' : '#DFFCEF',
            }
        },
    },

    plugins: [forms, typography],
};


