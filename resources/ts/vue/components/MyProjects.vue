<template>
  <section id="projects" class="grid grid-cols-1 md:grid-cols-2">
    <div class="py-12 bg-yellow-400 px-5 sm:px-20">
      <h3 class="text-3xl font-bold mb-3">Web Development</h3>
      <p>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque,
        laborum, ad animi praesentium voluptatum non voluptatem cum debitis
        deserunt quisquam fugit! Possimus ad ratione quas eos quos, obcaecati
        harum quo!
      </p>
      <router-link
        class="inline-block mt-6 bg-black shadow-lg shadow-gray-900 hover:shadow-xl hover:shadow-gray-900 px-10 py-3 rounded-full ease-in duration-150 text-white font-bold"
        to="/projects/dev"
        >Open</router-link
      >
    </div>
    <div
      class="py-12 bg-white px-5 sm:px-20 border-b-2 border-black sm:border-b-0"
    >
      <h3 class="text-3xl font-bold mb-3">Web Design (UX/UI)</h3>
      <p>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque,
        laborum, ad animi praesentium voluptatum non voluptatem cum debitis
        deserunt quisquam fugit! Possimus ad ratione quas eos quos, obcaecati
        harum quo!
      </p>
      <router-link
        class="inline-block mt-6 bg-black shadow-lg shadow-gray-900 hover:shadow-xl hover:shadow-gray-900 px-10 py-3 rounded-full ease-in duration-150 text-white font-bold"
        to="/projects/design"
        >Open</router-link
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
</template>
