import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { viteCommonjs } from '@originjs/vite-plugin-commonjs'
import commonjs from '@rollup/plugin-commonjs';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
        //viteCommonjs(),
        commonjs({
            requireReturnsDefault:true
        })
    ],
});
