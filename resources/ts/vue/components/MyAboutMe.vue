<template>
  <section id="about" class="md:w-3/4 md:m-auto m-5">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 sm:gap-14 sm:mt-10">
      <img
        src="../../../assets/img/profile.jpg"
        alt="Profile photo"
        width="100%"
        height="auto"
      />
      <div class="flex items-start justify-between flex-col text-sm">
        <div>
          <span class="font-extrabold">Discover</span>
          <h2 class="font-extrabold text-2xl mb-4">About me</h2>
          <p class="font-light mb-6">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio
            illum cum voluptate iusto voluptatem quas quis harum suscipit, eaque
            doloribus?
          </p>
          <hr />
          <div class="grid mt-6 gap-6">
            <div>
              <p class="font-bold uppercase text-sm mb-1">Name</p>
              <p>Iván Torres García</p>
            </div>
            <div>
              <p class="font-bold uppercase text-sm mb-1">Old</p>
              <p>19</p>
            </div>
            <div>
              <p class="font-bold uppercase text-sm mb-1">Email</p>
              <p>ivantorresgarcia.02@gmail.com</p>
            </div>
            <div>
              <p class="font-bold uppercase text-sm mb-1">Address</p>
              <p>Valencia, Spain</p>
            </div>
          </div>
        </div>
        <a
          href="#"
          class="
            inline-block
            mx-auto
            sm:mx-0
            mt-10
            px-14
            py-3
            bg-gray-800
            hover:bg-gray-900
            text-white
            font-bold
            ease-in
            duration-75
            rounded-full
          "
          >Download CV</a
        >
      </div>
    </div>
  </section>
</template>
