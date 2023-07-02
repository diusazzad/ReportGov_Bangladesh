/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontSize: {
                // '2xl': '1.5rem', // Example for h1
                // 'xl': '1.25rem', // Example for h2
                // 'lg': '1.125rem', // Example for h3
                // 'md': '1rem', // Example for h4
                // 'base': '0.875rem', // Example for h5
                // 'sm': '0.75rem', // Example for h6
            }
        },
    },
    plugins: [],
}
