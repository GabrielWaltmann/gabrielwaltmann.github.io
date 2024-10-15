import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    proxy: {
        '/api': {
            target: process.env.VITE_PROXY_TARGET,
            changeOrigin: true,
          rewrite: (path) => path.replace(/^\/api/, ''),
        },
      },
});
