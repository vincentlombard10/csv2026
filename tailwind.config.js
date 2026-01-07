/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './resources/**/*.antlers.html',
        './resources/**/*.blade.php',
        './resources/**/*.vue',
        './content/**/*.md', // optional
    ],
    theme: {
        extend: {
            colors: {
                brand: '#6366F1',
                primary: {
                    100: '#E0E7FF',
                    500: '#6366F1',
                    700: '#4338CA',
                },
            },
        },
    },
    plugins: [],
}
