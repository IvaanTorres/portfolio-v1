<template>
  <MyHeader class="h-screen" />
  <MySocial class="hidden sm:flex" />
  <MyAboutMe />
  <MySkills />
  <MyProjects />
  <MyMainProjects />
  <p class="font-extrabold text-4xl text-center p-5">...</p>
</template>

<script lang="ts" setup>
//! COMPONENTS
import MyHeader from "../components/MyHeader.vue";
import MySocial from "../components/MySocial.vue";
import MyAboutMe from "../components/MyAboutMe.vue";
import MySkills from "../components/MySkills.vue";
import MyProjects from "../components/MyProjects.vue";
import MyMainProjects from "../components/MyMainProjects.vue";
</script>
