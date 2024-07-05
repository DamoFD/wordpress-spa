import { defineConfig } from 'vite';

export default defineConfig({
    css: {
        postcss: './postcss.config.js',
    },
    server: {
        host: '0.0.0.0',
        port: 3000,
        watch: {
            usePolling: true
        }
    },
});
