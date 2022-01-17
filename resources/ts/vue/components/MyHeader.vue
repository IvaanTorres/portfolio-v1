<template>
  <header class="relative">
    <MyParticles />
    <div
      class="flex justify-center sm:justify-start items-center w-full h-screen absolute top-0 z-30"
    >
      <div
        class="text-center sm:text-left sm:mt-14 md:mt-10 sm:ml-16 md:ml-24 text-white"
      >
        <p class="sm:hidden md:inline-block mb-4">Welcome</p>
        <h1 class="text-3xl sm:text-5xl md:text-6xl mb-5 font-extrabold">
          Iván Torres García
        </h1>
        <h2 class="subtitle text-xl sm:text-3xl mb-10">Full-Stack Developer</h2>
        <a
          href="https://drive.google.com/file/d/1l9_AEtOa6ED7WyOnsSsxzToOjbDC9zRP/view?usp=sharing"
          target="_blank"
          rel="noreferrer"
          class="inline-block px-14 py-3 bg-yellow-300 hover:bg-yellow-400 text-black font-bold ease-in duration-75 rounded-full"
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

<style scoped>
.subtitle {
  overflow: hidden; /* Ensures the content is not revealed until the animation */
  border-right: 0.15em solid rgb(253, 224, 71); /* The typwriter cursor */
  white-space: nowrap; /* Keeps the content on a single line */
  letter-spacing: 0.15em; /* Adjust as needed */
  animation: typing 3.5s steps(40, end), blink-caret 0.75s step-end infinite;
}

/* The typing effect */
@keyframes typing {
  from {
    width: 0;
  }
  to {
    width: 100%;
  }
}

/* The typewriter cursor effect */
@keyframes blink-caret {
  from,
  to {
    border-color: transparent;
  }
  50% {
    border-color: rgb(253, 224, 71);
  }
}
</style>
