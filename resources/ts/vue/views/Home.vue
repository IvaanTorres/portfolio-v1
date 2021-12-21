<template>
  <MyHeader class="h-screen" />
  <MySocial class="hidden sm:flex" />
  <MyAboutMe />
  <MySkills />
</template>

<script lang="ts" setup>
//! COMPONENTS
import MyHeader from "../components/MyHeader.vue";
import MySocial from "../components/MySocial.vue";
import MyAboutMe from "../components/MyAboutMe.vue";
import MySkills from "../components/MySkills.vue";
</script>
