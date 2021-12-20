<template>
  <div>
    <div
      class="
        flex
        justify-between
        bg-transparent
        p-4
        px-24
        absolute
        top-0
        w-full
        z-50
      "
    >
      <!-- <img
        src="https://icones.pro/wp-content/uploads/2021/02/google-icone-symbole-png-logo-jaune.png"
        alt="#"
        width="50"
        height="50"
      /> -->
      <span
        class="hidden sm:block font-extrabold text-xl text-white py-4 font-mono"
        >&#60;ITG /&#62;</span
      >
      <div class="flex gap-5 justify-center sm:justify-start w-full sm:w-auto">
        <router-link class="font-bold text-white py-4" to="/">Home</router-link>
        <a href="#" class="font-bold text-white py-4">Projects</a>
        <a href="#" class="font-bold text-white py-4">Skills</a>
        <router-link class="font-bold text-white py-4" to="/about"
          >About</router-link
        >
      </div>
    </div>
    <router-view />
  </div>
</template>

<style>
@import url("https://fonts.googleapis.com/css2?family=Sora:wght@100;200;300;400;500;600;700;800&display=swap");

a.router-link-exact-active {
  color: #facc15;
}
* {
  font-family: "Sora";
}
/* html {
  overflow-x: hidden;
} */
</style>
