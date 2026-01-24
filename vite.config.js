import { defineConfig, loadEnv } from "vite";
import laravel, { refreshPaths } from "laravel-vite-plugin";
import fs from "fs";

export default defineConfig(({ mode }) => {
    const env = loadEnv(mode, process.cwd(), "");
    const host = env.APP_DOMAIN;

    return {
        plugins: [
            laravel({
                input: ["resources/css/app.css", "resources/js/app.js"],
                refresh: [...refreshPaths, "app/Livewire/**"],
            }),
        ],
    };
});
