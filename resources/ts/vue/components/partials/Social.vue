<template>
  <div>
    <a
      target="_blank"
      :href="data!.link"
      class="hover:text-gray-700 ease-in duration-100"
      rel="noreferrer"
      ><font-awesome-icon :icon="[splitSrc()[0], splitSrc()[1]]"
    /></a>
  </div>
</template>

<script lang="ts" setup>
import { PropType } from "vue";
//! INTERFACES
import Social from "../../../interfaces/Social";

const props = defineProps({
  data: {
    type: Object as PropType<Social>,
    require: true,
  },
});

const splitSrc = () => {
  const src_img = props.data!.src_img;
  return src_img.split("@");
};
</script>
