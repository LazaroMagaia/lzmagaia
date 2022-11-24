import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';
export default defineConfig({
    plugins: [
        vue({
            template: {
              compilerOptions: {
                isCustomElement: (tag) => ['md-linedivider'].includes(tag),
              },
              transformAssetUrls: {
                  includeAbsolute: false,
              },
            }
          }),
        laravel({
            input: ['resources/css/app.css','resources/css/home.css','resources/css/contact.css'
            , 'resources/js/app.js','resources/sass/app.scss'],
            refresh: true,
        }),
    ],
});
