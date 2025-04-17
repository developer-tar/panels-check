import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.scss',
                'resources/js/page-cdn.js',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
