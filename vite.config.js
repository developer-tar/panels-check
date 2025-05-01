import laravel from 'laravel-vite-plugin';
import { defineConfig } from 'vite';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.scss',
                'resources/css/hr/app.scss',
                'resources/css/employee/app.scss',
                'resources/css/vendor/app.scss',
                'resources/js/page-cdn.js',
                'resources/js/app.js',
                 'resources/js/hr/app.js',
                 'resources/js/employee/app.js',
                 'resources/js/vendor/app.js',
            ],
            refresh: true,
        }),
    ],
});
