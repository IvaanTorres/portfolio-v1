<template>
  <MyHeader class="h-screen" />
  <MySocial class="hidden sm:flex" />
  <MyAboutMe />
  <MySkills />
  <section id="projects" class="grid grid-cols-1 md:grid-cols-2 bg-gray-300">
    <div class="py-12 bg-yellow-400 px-5 sm:px-20">
      <h3 class="text-3xl font-bold mb-3">Web Development</h3>
      <p>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque,
        laborum, ad animi praesentium voluptatum non voluptatem cum debitis
        deserunt quisquam fugit! Possimus ad ratione quas eos quos, obcaecati
        harum quo!
      </p>
      <a
        class="
          inline-block
          mt-6
          bg-black
          shadow-lg shadow-gray-900
          px-10
          py-3
          rounded-full
          text-white
          font-bold
        "
        href="#"
        >Open</a
      >
    </div>
    <div class="py-12 bg-white px-5 sm:px-20">
      <h3 class="text-3xl font-bold mb-3">Web Design</h3>
      <p>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque,
        laborum, ad animi praesentium voluptatum non voluptatem cum debitis
        deserunt quisquam fugit! Possimus ad ratione quas eos quos, obcaecati
        harum quo!
      </p>
      <a
        class="
          inline-block
          mt-6
          bg-black
          text-white
          shadow-lg shadow-gray-900
          px-10
          py-3
          rounded-full
          ease-in
          duration-150
          font-bold
        "
        href="#"
        >Open</a
      >
      <img
        src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/figma/figma-original.svg"
        class="w-10 ml-2 inline"
        title="Figma"
      />
      <img
        src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/illustrator/illustrator-line.svg"
        class="w-10 ml-2 bg-amber-900 inline"
        title="Adobe Illustrator"
      />
    </div>
  </section>

  <p class="font-extrabold text-4xl text-center p-5">...</p>
</template>

<script lang="ts" setup>
//! COMPONENTS
import MyHeader from "../components/MyHeader.vue";
import MySocial from "../components/MySocial.vue";
import MyAboutMe from "../components/MyAboutMe.vue";
import MySkills from "../components/MySkills.vue";
</script>
