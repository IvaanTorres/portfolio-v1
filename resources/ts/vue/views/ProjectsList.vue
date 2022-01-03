<template>
  <div class="w-full pt-10">
    <h1 class="text-center font-extrabold text-3xl">Web Development</h1>
    <div class="main-projects p-5 mx-5 md:mx-20 md:p-12 mt-10">
      <div class="grid grid-cols-1 lg:grid-cols-3 grid-rows-2 bg-white">
        <ProjectComp
          v-for="(project, index) of mainProjects"
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
//! INTERFACES
import Project from "../../interfaces/Project";
//! COMPONENTS
import ProjectComp from "../components/partials/Project.vue";

const mainProjects: Project[] = [
  {
    id: 0,
    name: "Travel Agency",
    description: "This is the description",
    skills: [
      {
        id: 0,
        name: "HTML",
        type: "Languages",
        src_img: "html5/html5-original-wordmark.svg",
      },
      {
        id: 1,
        name: "CSS",
        type: "Languages",
        src_img: "css3/css3-original-wordmark.svg",
      },
    ],
    src_img: "",
    link_repo: "https://www.google.es",
    isDev: true,
    isMain: true,
  },
  {
    id: 1,
    name: "TO-DO App",
    description: "This is the description",
    skills: [
      {
        id: 0,
        name: "HTML",
        type: "Languages",
        src_img: "html5/html5-original-wordmark.svg",
      },
      {
        id: 1,
        name: "CSS",
        type: "Languages",
        src_img: "css3/css3-original-wordmark.svg",
      },
    ],
    src_img: "",
    link_repo: "https://www.google.es",
    isDev: true,
    isMain: true,
  },
  {
    id: 2,
    name: "Portfolio",
    description: "This is the description",
    skills: [
      {
        id: 0,
        name: "HTML",
        type: "Languages",
        src_img: "html5/html5-original-wordmark.svg",
      },
      {
        id: 1,
        name: "CSS",
        type: "Languages",
        src_img: "css3/css3-original-wordmark.svg",
      },
    ],
    src_img: "",
    link_repo: "https://www.google.es",
    isDev: true,
    isMain: true,
  },
  {
    id: 4,
    name: "Travel Agency",
    description: "This is the description",
    skills: [
      {
        id: 0,
        name: "HTML",
        type: "Languages",
        src_img: "html5/html5-original-wordmark.svg",
      },
      {
        id: 1,
        name: "CSS",
        type: "Languages",
        src_img: "css3/css3-original-wordmark.svg",
      },
    ],
    src_img: "",
    link_repo: "https://www.google.es",
    isDev: true,
    isMain: true,
  },
  {
    id: 5,
    name: "TO-DO App",
    description: "This is the description",
    skills: [
      {
        id: 0,
        name: "HTML",
        type: "Languages",
        src_img: "html5/html5-original-wordmark.svg",
      },
      {
        id: 1,
        name: "CSS",
        type: "Languages",
        src_img: "css3/css3-original-wordmark.svg",
      },
    ],
    src_img: "",
    link_repo: "https://www.google.es",
    isDev: true,
    isMain: true,
  },
  {
    id: 6,
    name: "Portfolio",
    description: "This is the description",
    skills: [
      {
        id: 0,
        name: "HTML",
        type: "Languages",
        src_img: "html5/html5-original-wordmark.svg",
      },
      {
        id: 1,
        name: "CSS",
        type: "Languages",
        src_img: "css3/css3-original-wordmark.svg",
      },
    ],
    src_img: "",
    link_repo: "https://www.google.es",
    isDev: true,
    isMain: true,
  },
];
</script>

<style scoped>
.main-projects {
  background-color: #facc15;
  background-image: url("data:image/svg+xml,%3Csvg width='40' height='40' viewBox='0 0 40 40' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='%23000000' fill-opacity='1' fill-rule='evenodd'%3E%3Cpath d='M0 40L40 0H20L0 20M40 40V20L20 40'/%3E%3C/g%3E%3C/svg%3E");
}
</style>
