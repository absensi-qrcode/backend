import './bootstrap';
import '../css/app.css';

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy';

// * PRIMEVUE
import PrimeVue from 'primevue/config';
import Lara from '@primevue/themes/lara';
import ConfirmationService from 'primevue/confirmationservice';
import ToastService from 'primevue/toastservice';
import 'primeicons/primeicons.css'

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(PrimeVue, {
                theme: {
                    preset: Lara,
                    options: {
                        prefix: 'p',
                        darkModeSelector: '.dark',
                        cssLayer: {
                            name: 'primevue',
                            order: 'tailwind-base, primevue, tailwind-utilities, custom-class'
                        }
                    }
                },
                ripple: true,
            })
            .use(ConfirmationService)
            .use(ToastService)
            .use(ZiggyVue)
            .mount(el);
    },
    progress: {
        color: '#4B5563',
    },
});
