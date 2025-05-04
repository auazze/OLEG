import { defineConfig } from 'vite'
import laravel from 'laravel-vite-plugin'
import FullReload from 'vite-plugin-full-reload'

export default defineConfig({
    plugins: [
        laravel([
            'resources/css/app.css',
            'resources/js/app.js',
        ]),
        FullReload([
            'resources/views/**/*.blade.php',
            'routes/**/*.php',
        ]),
    ],
    server: {
        host: '0.0.0.0',
        port: 5173,
        hmr: { host: 'localhost' },
    },
})
