import { createRouter, createWebHistory, RouteRecordRaw } from "vue-router";

import Home from "./vue/views/Home.vue";
import ProjectsList from "./vue/views/ProjectsList.vue";
import ProjectDetails from "./vue/views/ProjectDetails.vue";

const routes: Array<RouteRecordRaw> = [
  {
    path: "/",
    name: "Home Page",
    component: Home,
  },
  {
    path: "/projects/dev",
    alias: "/projects/design",
    name: "Projects List",
    component: ProjectsList,
  },
  {
    path: "/projects/dev/:id",
    alias: "/projects/design/:id",
    name: "Project Details",
    component: ProjectDetails,
  },
];

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes,
  /* scrollBehavior(to, from, savedPosition) {
    return new Promise((resolve, reject) => {
      setTimeout(() => {
        resolve({ left: 0, top: 0 });
      }, 0);
    });
  }, */
});

export default router;
