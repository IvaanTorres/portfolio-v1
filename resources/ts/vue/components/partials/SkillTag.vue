<template>
  <span class="px-3 py-1 text-xs font-semibold bg-blue-400 rounded-full">{{
    name
  }}</span>
</template>

<script lang="ts" setup>
const props = defineProps({
  name: {
    type: String,
    required: true,
  },
});
</script>
