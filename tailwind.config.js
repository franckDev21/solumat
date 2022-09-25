/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./resources/**/*.jsx",
    ],
    theme: {
        extend: {
            colors: {
                primary: "#00ADEF",
                secondary: "#000A93",
                tersiaire : "#292929"
            },
        },
    },
    plugins: [],
};