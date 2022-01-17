<template>
  <section class="mt-10">
    <h2 class="font-bold text-3xl text-center">Main Projects</h2>
    <div class="main-projects mx-5 sm:mx-20 m-auto p-5 sm:p-14 mt-10">
      <div class="grid grid-cols-1 lg:grid-cols-3 bg-white">
        <ProjectComp
          v-for="(project, index) of mainProjects"
          :key="index"
          :index="index"
          :data="project"
        />
      </div>
    </div>
  </section>
</template>

<script lang="ts" setup>
//! INTERFACES
import Project from "../../interfaces/Project";
//! COMPONENTS
import ProjectComp from "./partials/Project.vue";
//! SERVICES
import { getMain } from "../../services/Project";
import { onMounted, ref } from "vue";

onMounted(() => {
  setProjects();
});

const mainProjects = ref<Project[]>([]);
const setProjects = async () => {
  if (mainProjects.value.length == 0) {
    const p = await getMain();
    mainProjects.value = p.data;
  }
};
</script>

<style scoped>
.main-projects {
  background-color: #facc15;
  background-image: url("data:image/svg+xml,%3Csvg width='40' height='40' viewBox='0 0 40 40' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='%23000000' fill-opacity='1' fill-rule='evenodd'%3E%3Cpath d='M0 40L40 0H20L0 20M40 40V20L20 40'/%3E%3C/g%3E%3C/svg%3E");
}
/* .main-projects {
  background-color: #ffffff;
  background-image: url("data:image/svg+xml,%3Csvg width='40' height='40' viewBox='0 0 40 40' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='%23000000' fill-opacity='0.72' fill-rule='evenodd'%3E%3Cpath d='M0 40L40 0H20L0 20M40 40V20L20 40'/%3E%3C/g%3E%3C/svg%3E");
} */
</style>
