import { createWebHistory, createRouter } from "vue-router";

import Home from "./vue/views/Home.vue";
import About from "./vue/views/About.vue";

const history = createWebHistory();
const router = createRouter({
  history,
  routes: [
    {
      path: "/",
      component: Home,
    },
    {
      path: "/about",
      component: About,
    },
  ],
});

export default router;
