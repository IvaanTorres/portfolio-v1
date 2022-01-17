<template>
  <div class="w-full pt-10">
    <h1 class="text-center font-extrabold text-3xl">{{ title }}</h1>
    <div class="text-center mt-10 mx-5">
      <div v-if="areProjectsLoaded === 0">Loading...</div>
      <div v-if="areProjectsLoaded === 2">
        There's no projects on here for the moment !
      </div>
    </div>
    <div
      v-if="areProjectsLoaded === 1"
      class="main-projects p-5 mx-5 md:mx-20 md:p-12 mt-10"
    >
      <div class="grid grid-cols-1 lg:grid-cols-3 bg-white">
        <ProjectComp
          v-for="(project, index) of projects"
          :key="project.id"
          :index="index"
          :data="project"
        />
      </div>
    </div>
  </div>
  <p class="font-extrabold text-4xl text-center p-5">...</p>
</template>

<script lang="ts" setup>
import { onMounted, ref } from "vue";
import { useRoute } from "vue-router";
const router = useRoute();
//! INTERFACES
import Project from "../../interfaces/Project";
//! COMPONENTS
import ProjectComp from "../components/partials/Project.vue";
//! SERVICES
import { getByType } from "../../services/Project";

onMounted(() => {
  setTitle();
  setProjects();
});

const title = ref<string>("");
const setTitle = () => {
  title.value = isDev() ? "Web Development" : "Web Design";
};

const projects = ref<Project[]>([]);
const areProjectsLoaded = ref<Number>(0);
const setProjects = async () => {
  if (projects.value.length == 0) {
    let p = isDev()
      ? await getByType("development")
      : await getByType("design");
    projects.value = p.data;
    areProjectsLoaded.value = projects.value.length > 0 ? 1 : 2;
  }
};

const isDev = () => {
  return router.fullPath === "/projects/dev";
};
</script>

<style scoped>
.main-projects {
  background-color: #facc15;
  background-image: url("data:image/svg+xml,%3Csvg width='40' height='40' viewBox='0 0 40 40' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='%23000000' fill-opacity='1' fill-rule='evenodd'%3E%3Cpath d='M0 40L40 0H20L0 20M40 40V20L20 40'/%3E%3C/g%3E%3C/svg%3E");
}
</style>
