<template>
  <div class="l-page">
    <nav :class="navVariants()">
      <router-link to="/"
        ><span class="block font-extrabold text-xl text-white py-4 font-mono"
          >&#60;ITG /&#62;</span
        ></router-link
      >
      <div :class="navResponsive()">
        <font-awesome-icon
          :icon="['fas', 'times']"
          class="absolute top-0 right-0 m-10 mt-6 lg:hidden text-white my-3 text-4xl cursor-pointer"
          @click="toggleHamburguer()"
        />
        <router-link
          class="font-bold text-white py-4"
          to="/"
          @click="toggleHamburguer()"
          >Home</router-link
        >
        <a
          href="#projects"
          class="font-bold text-white py-4"
          @click="toggleHamburguer()"
          >Projects</a
        >
        <!-- HACER DESPLEGABLE CON ROUTER-LINKS -->
        <a
          v-if="checkRoute()"
          href="#skills"
          class="font-bold text-white py-4"
          @click="toggleHamburguer()"
          >Skills</a
        >
        <a
          v-if="checkRoute()"
          href="#about"
          class="font-bold text-white py-4"
          @click="toggleHamburguer()"
          >About</a
        >
      </div>
      <font-awesome-icon
        :icon="['fas', 'bars']"
        class="block lg:hidden text-white my-3 text-4xl cursor-pointer"
        @click="toggleHamburguer()"
      />
    </nav>
    <main>
      <router-view />
    </main>
    <footer
      class="flex flex-col md:flex-row md:justify-between w-full bg-black text-white p-6"
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
import { ref } from "vue";
import { useRoute } from "vue-router";
const router = useRoute();

const checkRoute = () => {
  const paths = ["/", "#projects", "#skills", "#about"];
  return paths.includes(router.path);
};
const navVariants = () => {
  if (checkRoute()) {
    return "flex justify-between bg-transparent p-4 px-10 sm:px-24 absolute top-0 w-full z-50";
  } else {
    return "flex justify-between bg-black p-4 px-10 sm:px-24 block w-full z-50";
  }
};

const isActive = ref(false);
const navResponsive = () => {
  if (isActive.value === false) {
    return "hidden lg:flex lg:gap-5 lg:justify-center sm:justify-start w-full sm:w-auto";
  }
  return "fixed top-0 left-0 w-full h-screen bg-gray-900 flex flex-col text-center gap-4 justify-center text-2xl";
};
const toggleHamburguer = () => {
  //Check the window is lg (1024px)
  if (window.innerWidth < 1024) {
    if (isActive.value === false) {
      isActive.value = true;
    } else {
      isActive.value = false;
    }
  }
};
</script>

<style>
@import url("https://fonts.googleapis.com/css2?family=Sora:wght@100;200;300;400;500;600;700;800&display=swap");

a.router-link-exact-active {
  color: #facc15;
}
* {
  font-family: "Sora";
}
.l-page {
  display: grid;
  height: 100vh;
  grid-template-rows: auto 1fr auto;
  white-space: pre-wrap;
}
</style>
