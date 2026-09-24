import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css', 
                'resources/js/app.js',
                // SB Admin 2 CSS
                'resources/assets/css/sb-admin-2.min.css',
                // Vendor CSS
                'resources/assets/vendor/fontawesome-free/css/all.min.css',
                // SB Admin 2 JS
                'resources/assets/js/sb-admin-2.min.js',
                'resources/assets/js/demo/chart-area-demo.js',
                'resources/assets/js/demo/chart-pie-demo.js',
                // Vendor JS
                'resources/assets/vendor/jquery/jquery.min.js',
                'resources/assets/vendor/bootstrap/js/bootstrap.bundle.min.js',
                'resources/assets/vendor/jquery-easing/jquery.easing.min.js',
                'resources/assets/vendor/chart.js/Chart.min.js',
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
    server: {
        watch: {
            ignored: ['**/storage/framework/views/**'],
        },
    },
});
