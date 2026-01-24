/** @type {import('tailwindcss').Config} */

import preset from "./vendor/filament/support/tailwind.config.preset";

export default {
    darkMode: "selector",

    presets: [preset],

    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./app/Filament/**/*.php",
        "./resources/views/filament/**/*.blade.php",
        "./vendor/filament/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                "sf-pro-text": ['"SF Pro Text"', "sans-serif"],
            },
            container: {
                center: true,
                padding: "1.25rem",
            },
            colors: {
                primary: "#DB6B19",
                background: "#FFF0E6",
                text: "#3D3E3E",
                placeholder: "#888888",
                border: "#FCB586",
                contactBorder: "#FFD5B7",
            },
        },
    },
    plugins: [
        require("@tailwindcss/typography"),
        require("@tailwindcss/forms"),
    ],
};
