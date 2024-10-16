import { defineConfig } from 'vite';
import vue from '@vitejs/plugin-vue';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        vue(), // Add the Vue plugin
    ],
    resolve: {
        alias: {
            // Alias Vue to the version that includes the template compiler
            'vue': 'vue/dist/vue.esm-bundler.js',
        },
    },
});
