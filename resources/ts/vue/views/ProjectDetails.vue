<template>
  <div class="pt-10 pb-10 h-full w-full">
    <div
      class="grid grid-cols-1 xl:grid-cols-5 gap-10 mx-5 md:mx-40 xl:mx-20 m-auto h-full"
    >
      <div class="col-span-3 mb-10">
        <iframe
          class="w-full h-full"
          :src="project?.link_yt"
          title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen
          loading="lazy"
        ></iframe>
        <div class="m-3">
          <a :href="project?.link_repo" class="inline-block" target="_blank"
            ><img
              class="w-10"
              src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/github/github-original.svg"
          /></a>
        </div>
      </div>
      <div class="col-span-3 md:col-span-2">
        <h1 class="text-3xl mb-5 font-extrabold">{{ project?.name }}</h1>
        <p class="mb-5">
          {{ project?.description }}
        </p>
        <p class="font-semibold mb-5">Created at: {{ project?.creation }}</p>
        <div class="flex flex-wrap gap-2">
          <SkillTag
            v-for="skill of project?.skills"
            :key="skill.id"
            :name="skill.name"
          />
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts" setup>
import { useRoute } from "vue-router";
const router = useRoute();
//! INTERFACES
import Project from "../../interfaces/Project";
//! COMPONENTS
import SkillTag from "../components/partials/SkillTag.vue";
//! SERVICES
import { find } from "../../services/Project";
import { onMounted, ref } from "vue";

onMounted(() => {
  getProject();
});

let project = ref<Project>();

const getProject = async () => {
  const p = await find("development", +router.params.id);
  project.value = p.data;
};
</script>
