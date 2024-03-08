import { createWebHistory, createRouter } from "vue-router";
// import Home from "@/pages/Home.vue";
// import About from "@/views/About.vue";

const routes = [
    {
        path:'/',
        name:'/home',
        component: () => import('@/pages/Home.vue')
    }

];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;