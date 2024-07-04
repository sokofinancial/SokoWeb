import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Open Sans", "sans-serif"],
                poppins: ["Poppins", "sans-serif"],
            },
            colors: {
                "primary-100": "#41479E",
                "primary-200": "#7472d1",
                "primary-300": "#dbd2ff",
                "accent-100": "#7278df",
                "accent-200": "#ffffff",
                "main-text": "#1d1c1c",
                "sub-text": "#313d44",
                "bg-100": "#fffefb",
                "bg-200": "#f5f4f1",
                "bg-300": "#cccbc8",
            },
        },
    },

    plugins: [forms],
};
