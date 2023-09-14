/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './*.php',
        './**/*.php',
        './resources/css/*.css',
        './resources/js/*.js',
    ],
 plugins: [
        require('flowbite/plugin')     
    ]
};
