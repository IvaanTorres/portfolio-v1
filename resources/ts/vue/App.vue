<template>
  <div class="l-page">
    <nav
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
      <span
        class="hidden sm:block font-extrabold text-xl text-white py-4 font-mono"
        >&#60;ITG /&#62;</span
      >
      <div class="flex gap-5 justify-center sm:justify-start w-full sm:w-auto">
        <router-link class="font-bold text-white py-4" to="/">Home</router-link>
        <router-link class="font-bold text-white py-4" to="/about"
          >Projects</router-link
        >
        <a href="#" class="font-bold text-white py-4">Skills</a>
        <a href="#about" class="font-bold text-white py-4">About</a>
      </div>
    </nav>
    <main>
      <router-view />
    </main>
    <footer class="w-full bg-red-400">Hey</footer>
  </div>
</template>

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
  display: grid;
  height: 100%;
  grid-template-rows: auto 1fr auto;
}
</style>
