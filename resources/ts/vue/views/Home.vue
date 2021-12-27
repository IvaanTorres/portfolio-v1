<template>
  <MyHeader class="h-screen" />
  <MySocial class="hidden sm:flex" />
  <MyAboutMe />
  <MySkills />
  <MyProjects />

  <section class="mt-10">
    <h2 class="font-bold text-3xl text-center">Main Projects</h2>
    <div class="main-projects mx-5 sm:mx-20 m-auto p-5 sm:p-14 mt-10">
      <div class="grid grid-cols-1 lg:grid-cols-3 bg-white">
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
            Project
          </h3>
          <div class="flex flex-wrap justify-center gap-1">
            <span
              class="px-3 py-1 text-xs font-semibold bg-blue-400 rounded-full"
              >VueJS</span
            >
            <span
              class="px-3 py-1 text-xs font-semibold bg-blue-400 rounded-full"
              >Laravel</span
            >
            <span
              class="px-3 py-1 text-xs font-semibold bg-blue-400 rounded-full"
              >TypeScript</span
            >
            <span
              class="px-3 py-1 text-xs font-semibold bg-blue-400 rounded-full"
              >TailwindCSS</span
            >
            <span
              class="px-3 py-1 text-xs font-semibold bg-blue-400 rounded-full"
              >SASS</span
            >
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
            src="../../../assets/img/attach.svg"
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
            Project
          </h3>
          <div class="flex flex-wrap justify-center gap-1">
            <span
              class="px-3 py-1 text-xs font-semibold bg-blue-400 rounded-full"
              >VueJS</span
            >
            <span
              class="px-3 py-1 text-xs font-semibold bg-blue-400 rounded-full"
              >Laravel</span
            >
            <span
              class="px-3 py-1 text-xs font-semibold bg-blue-400 rounded-full"
              >TypeScript</span
            >
            <span
              class="px-3 py-1 text-xs font-semibold bg-blue-400 rounded-full"
              >TailwindCSS</span
            >
            <span
              class="px-3 py-1 text-xs font-semibold bg-blue-400 rounded-full"
              >SASS</span
            >
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
            src="../../../assets/img/attach.svg"
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
        <div class="flex flex-col relative px-9">
          <h3 class="text-center lg:p-5 mb-5 lg:mb-0 pt-10 text-xl font-bold">
            Project
          </h3>
          <div class="flex flex-wrap justify-center gap-1">
            <span
              class="px-3 py-1 text-xs font-semibold bg-blue-400 rounded-full"
              >VueJS</span
            >
            <span
              class="px-3 py-1 text-xs font-semibold bg-blue-400 rounded-full"
              >Laravel</span
            >
            <span
              class="px-3 py-1 text-xs font-semibold bg-blue-400 rounded-full"
              >TypeScript</span
            >
            <span
              class="px-3 py-1 text-xs font-semibold bg-blue-400 rounded-full"
              >TailwindCSS</span
            >
            <span
              class="px-3 py-1 text-xs font-semibold bg-blue-400 rounded-full"
              >SASS</span
            >
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
        </div>
      </div>
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
import MyProjects from "../components/MyProjects.vue";
</script>

<style>
.main-projects {
  background-color: #facc15;
  background-image: url("data:image/svg+xml,%3Csvg width='40' height='40' viewBox='0 0 40 40' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='%23000000' fill-opacity='1' fill-rule='evenodd'%3E%3Cpath d='M0 40L40 0H20L0 20M40 40V20L20 40'/%3E%3C/g%3E%3C/svg%3E");
}
/* .main-projects {
  background-color: #ffffff;
  background-image: url("data:image/svg+xml,%3Csvg width='40' height='40' viewBox='0 0 40 40' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='%23000000' fill-opacity='0.72' fill-rule='evenodd'%3E%3Cpath d='M0 40L40 0H20L0 20M40 40V20L20 40'/%3E%3C/g%3E%3C/svg%3E");
} */
</style>
