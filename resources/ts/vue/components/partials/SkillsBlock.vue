<template>
  <div class="bg-white border-2 border-black p-5">
    <h3
      class="text-2xl font-bold text-center mb-5 pb-2 border-b-2 border-black"
    >
      {{ title }}
    </h3>
    <div class="grid grid-cols-4 gap-4 m-auto p-3">
      <img
        v-for="skill of data"
        :key="skill.id"
        :src="getSrc(skill.src_img)"
        class="w-10 m-auto"
        :title="skill.name"
        loading="lazy"
      />
    </div>
  </div>
</template>

<script lang="ts" setup>
//! INTERFACES
import { PropType, defineProps } from "vue";
import Skill from "../../../interfaces/Skill";

const props = defineProps({
  data: {
    type: Array as PropType<Skill[]>,
    required: true,
  },
  title: {
    type: String,
    required: true,
  },
});

const getSrc = (src: string) => {
  return "https://cdn.jsdelivr.net/gh/devicons/devicon/icons/" + src;
};
</script>
