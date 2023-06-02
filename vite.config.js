import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css', 
                'resources/js/app.js',
                'resources/js/admineditsurveyquestion.js',
                'resources/js/adminquestions.js',
                'resources/js/adminsurvey.js',
                'resources/js/usersurvey.js',
            ],
            refresh: true,
        }),
    ],
});
