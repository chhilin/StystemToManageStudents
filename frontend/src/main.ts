import './assets/index.css'

import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import './style.css'

// createApp(App).use(router).mount('#app')
const app = createApp(App).use(router).mount('#app')