<template>
  <div class="pt-10 pb-10 h-full w-full">
    <div
      class="
        grid grid-cols-1
        xl:grid-cols-5
        gap-10
        mx-5
        md:mx-40
        xl:mx-20
        m-auto
        h-full
      "
    >
      <div class="col-span-3 mb-10">
        <iframe
          class="w-full h-full"
          src="https://www.youtube.com/embed/BiTuzeyDx6Y"
          title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen
        ></iframe>
        <div class="m-3">
          <a
            href="https://github.com/IvaanTorres/portfolio-v1"
            class="inline-block"
            target="_blank"
            ><img
              class="w-10"
              src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/github/github-original.svg"
          /></a>
        </div>
      </div>
      <div class="col-span-3 md:col-span-2">
        <h1 class="text-3xl mb-5 font-extrabold">{{ title }}</h1>
        <p class="mb-5">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis at,
          repellendus ullam iure harum ut placeat et quidem! Laborum, corrupti.
        </p>
        <p class="font-semibold mb-5">Created at: 30/01/2022</p>
        <div class="flex flex-wrap gap-2">
          <span class="px-3 py-1 text-xs font-semibold bg-blue-400 rounded-full"
            >VueJS</span
          >
          <span class="px-3 py-1 text-xs font-semibold bg-blue-400 rounded-full"
            >Laravel</span
          >
          <span class="px-3 py-1 text-xs font-semibold bg-blue-400 rounded-full"
            >TypeScript</span
          >
          <span class="px-3 py-1 text-xs font-semibold bg-blue-400 rounded-full"
            >TailwindCSS</span
          >
          <span class="px-3 py-1 text-xs font-semibold bg-blue-400 rounded-full"
            >HTML</span
          >
          <span class="px-3 py-1 text-xs font-semibold bg-blue-400 rounded-full"
            >CSS</span
          >
          <span class="px-3 py-1 text-xs font-semibold bg-blue-400 rounded-full"
            >JavaScript</span
          >
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts" setup>
import { ref } from "vue";
import { useRoute } from "vue-router";
const router = useRoute();

const title = ref("Title");
</script>
