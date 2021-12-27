<template>
  <div class="l-page">
    <nav :class="navVariants()">
      <span
        class="hidden sm:block font-extrabold text-xl text-white py-4 font-mono"
        >&#60;ITG /&#62;</span
      >
      <div class="flex gap-5 justify-center sm:justify-start w-full sm:w-auto">
        <router-link class="font-bold text-white py-4" to="/">Home</router-link>
        <a href="#projects" class="font-bold text-white py-4">Projects</a>
        <!-- HACER DESPLEGABLE CON ROUTER-LINKS -->
        <a v-if="checkRoute()" href="#skills" class="font-bold text-white py-4"
          >Skills</a
        >
        <a v-if="checkRoute()" href="#about" class="font-bold text-white py-4"
          >About</a
        >
      </div>
    </nav>
    <main>
      <router-view />
    </main>
    <footer
      class="
        flex flex-col
        md:flex-row md:justify-between
        w-full
        bg-black
        text-white
        p-6
      "
    >
      <p class="hidden md:inline-block text-sm py-2">
        Iván Torres García - ivantorresgarcia.02@gmail.com
      </p>
      <div class="flex gap-4 text-3xl justify-center">
        <a
          target="_blank"
          href="https://www.linkedin.com/in/ivan-torres-garcia/"
          class="hover:text-gray-300 ease-in duration-100"
          rel="noreferrer"
          ><font-awesome-icon :icon="['fab', 'linkedin']"
        /></a>
        <a
          target="_blank"
          href="https://www.linkedin.com/in/ivan-torres-garcia/"
          class="hover:text-gray-300 ease-in duration-100"
          rel="noreferrer"
          ><font-awesome-icon :icon="['fab', 'github']"
        /></a>
        <a
          target="_blank"
          href="https://www.linkedin.com/in/ivan-torres-garcia/"
          class="hover:text-gray-300 ease-in duration-100"
          rel="noreferrer"
          ><font-awesome-icon :icon="['fab', 'dev']"
        /></a>
      </div>
    </footer>
  </div>
</template>

<script lang="ts" setup>
import { useRoute } from "vue-router";
const router = useRoute();

const checkRoute = () => {
  const paths = ["/", "#projects", "#skills", "#about"];
  return paths.includes(router.path);
};
const navVariants = () => {
  if (router.fullPath === "/") {
    return "flex justify-between bg-transparent p-4 px-24 absolute top-0 w-full z-50";
  }
  console.log(checkRoute());
  return "flex justify-between bg-black p-4 px-24 absolute top-0 w-full z-50";
};
</script>

<style>
@import url("https://fonts.googleapis.com/css2?family=Sora:wght@100;200;300;400;500;600;700;800&display=swap");

a.router-link-exact-active {
  color: #facc15;
}
* {
  font-family: "Sora";
  scroll-behavior: smooth;
}
.l-page {
  /*  display: grid;
  height: 100vh;
  grid-template-rows: auto 1fr auto; */
}
</style>
