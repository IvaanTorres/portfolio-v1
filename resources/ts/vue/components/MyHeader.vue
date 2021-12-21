<template>
  <header class="relative">
    <MyParticles />
    <div
      class="
        flex
        justify-center
        sm:justify-start
        items-center
        w-full
        h-screen
        absolute
        top-0
        z-30
      "
    >
      <div class="text-center sm:text-left sm:ml-24 text-white">
        <p class="mb-4">Welcome</p>
        <h1 class="text-3xl sm:text-5xl md:text-6xl mb-5 font-extrabold">
          Iván Torres García
        </h1>
        <h2 class="text-xl sm:text-3xl mb-10">Full-Stack Developer</h2>
        <a
          href="#"
          class="
            inline-block
            px-14
            py-3
            bg-yellow-300
            hover:bg-yellow-400
            text-black
            font-bold
            ease-in
            duration-75
            rounded-full
          "
          >Download CV</a
        >
        <p class="rotate-90 hidden sm:block absolute right-0 top-2/4">
          - Scroll down -
        </p>
      </div>
    </div>
  </header>
</template>

<script lang="ts" setup>
//! COMPONENTS
import MyParticles from "./MyParticlesJs.vue";
</script>
