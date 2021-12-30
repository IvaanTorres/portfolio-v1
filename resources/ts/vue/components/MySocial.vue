<template>
  <section class="p-10 px-20 md:px-40 flex justify-around bg-gray-200">
    <div
      v-for="social of socialGroup"
      :key="social.id"
      class="flex gap-5 justify-around w-3/4 text-6xl text-gray-500"
    >
      <SocialComp :data="social" />
    </div>
  </section>
</template>

<script lang="ts" setup>
//! INTERFACES
import Social from "../../interfaces/Social";
//! COMPONENTS
import SocialComp from "./partials/Social.vue";

const socialGroup: Social[] = [
  {
    id: 1,
    name: "Linkedin",
    link: "https://www.linkedin.com/in/ivan-torres-garcia/",
    user: "Iván Torres García",
    src_img: "fab@linkedin",
  },
  {
    id: 2,
    name: "GitHub",
    link: "https://github.com/IvaanTorres",
    user: "IvaanTorres",
    src_img: "fab@github",
  },
  {
    id: 3,
    name: "Dev.to",
    link: "https://dev.to/ivaantorres",
    user: "ivaantorres",
    src_img: "fab@dev",
  },
  {
    id: 4,
    name: "Email",
    link: "mailto:ivantorresgarcia.02@gmail.com",
    user: "ivantorresgarcia.02@gmail.com",
    src_img: "fas@envelope",
  },
];
</script>
