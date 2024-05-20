/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "node_modules/preline/dist/*.js",
    ],
    theme: {
        extend: {
            colors: {
                blue1: "#000EBF",
                white1: "#F9FAFB",
            },
            fontFamily: {
                inter: ["Inter"],
            },
        },
    },
    plugins: [require("preline/plugin")],
};
