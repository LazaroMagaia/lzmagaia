import './bootstrap';
import "./navbar";
import "./home_script";
import {createApp} from 'vue';

import Newsletter from './vue/components/Newsletter.vue';
import Contacto from './vue/components/Contact.vue';

createApp(Newsletter).mount("#Newsletter");

createApp(Contacto).mount("#Contacto");
