<template>
  <div
    class="
      flex flex-col
      relative
      px-9
      border-b-2 border-black
      lg:border-b-0 lg:border-r-2 lg:border-black
    "
  >
    <h3 class="text-center lg:p-5 mb-5 lg:mb-0 pt-10 text-xl font-bold">
      {{ data.name }}
    </h3>
    <div class="flex flex-wrap justify-center gap-1">
      <SkillTag
        v-for="skill of data.skills"
        :key="skill.id"
        :name="skill.name"
      />
    </div>
    <a
      class="
        inline
        mt-8
        bg-gray-800
        hover:bg-gray-900
        px-10
        py-2
        text-white text-sm
        m-auto
        mb-10
        lg:mb-3
        rounded-full
      "
      href="#"
      >Open</a
    >
    <img
      v-if="!isMultipleOf3()"
      src="../../../../assets/img/attach.svg"
      alt="hey"
      class="
        w-16
        absolute
        bottom-0
        left-1/2
        -ml-8
        translate-y-8
        rotate-90
        lg:bottom-1/2 lg:left-full lg:-mt-8 lg:rotate-180
      "
    />
  </div>
</template>

<script lang="ts" setup>
import { PropType } from "vue";
//! INTERFACES
import Project from "../../../interfaces/Project";
//! COMPONENTS
import SkillTag from "./SkillTag.vue";

const props = defineProps({
  data: {
    type: Object as PropType<Project>,
    required: true,
  },
  index: {
    type: Number,
    required: true,
  },
});

const isMultipleOf3 = () => {
  const index = props.index + 1;
  return index % 3 === 0;
};
</script>
