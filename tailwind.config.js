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
            },
            dropShadow: {
                '3xl': '0 35px 35px rgba(0, 0, 0, 0.25)',
                '4xl': [
                    '0 35px 35px rgba(0, 0, 0, 0.25)',
                    '0 45px 65px rgba(0, 0, 0, 0.15)'
                ]
            },
            
        },
    },
    plugins: [
        // require('@tailwindcss/typography'),
    ],
}
