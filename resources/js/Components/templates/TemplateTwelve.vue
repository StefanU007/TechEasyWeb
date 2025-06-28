<!--Music Template 3rd page-->

<template>
  <div
    id="template"
    class="text-gray-800 min-h-screen bg-yellow-50 px-2 sm:px-4"
    :style="`font-family: ${appStore.fonts[appStore.selectedFont]};`"
    contenteditable="true"
  >
    <!-- Header -->
    <header class="text-center py-8">
      <img
        v-if="appStore.questionare.logo"
        :src="appStore.questionare.logo"
        class="w-24 h-14 object-scale-down mb-2 sm:mb-0 sm:ml-6"
      />
      <img
        v-else
        src="/assets/svg/logo.svg"
        class="w-24 h-14 object-scale-down mx-auto mb-4"
      />
      <nav class="flex flex-wrap justify-center gap-4 sm:gap-8 text-xs sm:text-sm md:text-base uppercase tracking-widest">
        <a href="#" class="hover:text-gray-500">Home</a>
        <a href="#" class="hover:text-gray-500">Biography</a>
        <a href="#" class="hover:text-gray-500">Music</a>
        <a href="#" class="hover:text-gray-500">Press</a>
        <a href="#" class="hover:text-gray-500">Contacts</a>
        <a href="#" class="hover:text-gray-500">Pages</a>
      </nav>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto flex flex-col lg:flex-row items-start gap-8 px-0">
      <!-- Left Section -->
      <div class="lg:w-1/3 space-y-12 text-gray-700 mb-8 lg:mb-0">
        <div class="space-y-4">
          <h2 class="text-lg font-semibold">Lincoln Park</h2>
          <div class="border-l-4 border-yellow-500 pl-4">
            <time datetime="2020-07-11" class="block text-4xl font-bold"
              :style="`color: ${appStore.selectedColor.three};`">Jul.11</time>
            <span class="block text-lg">7-9pm</span>
            <h3 class="text-xl font-bold mt-2" :style="`color: ${appStore.selectedColor.two};`">
              Jessica Smith Live Concert
            </h3>
            <p class="mt-2">
              This Saturday Jessica Smith will be performing her acknowledged hits and new songs from her latest album at Lincoln Park. Book your tickets now!
            </p>
            <a href="#" class="mt-4 inline-block bg-gray-800 text-white px-6 py-2 rounded hover:bg-gray-700">
              Get the Tickets
            </a>
          </div> 
        </div>
        <div class="space-y-4">
          <div class="border-l-4 border-yellow-500 pl-4">
            <time datetime="2020-07-15" class="block text-4xl font-bold"
              :style="`color: ${appStore.selectedColor.three};`">Jul.15</time>
            <span class="block text-lg">5-6pm</span>
            <h3 class="text-xl font-bold mt-2" :style="`color: ${appStore.selectedColor.two};`">
              Easter Brunch at CHANT
            </h3>
            <p class="mt-2">{{ appStore.questionare.location }}</p>
            <a href="#" class="mt-4 inline-block bg-gray-800 text-white px-6 py-2 rounded hover:bg-gray-700">
              Get the Tickets
            </a>
          </div>
        </div>
      </div>

      <!-- Center Section (Image and Title) -->
      <div class="lg:w-1/3 flex flex-col items-center space-y-4 mb-8 lg:mb-0">
        <h1 class="text-3xl sm:text-5xl font-bold text-center break-words md:w-[330px] text-wrap w-[360px] mx-auto"
            :style="`color: ${appStore.selectedColor.three};`">
          {{ appStore.questionare.name }}
        </h1>
        <span class="text-lg sm:text-xl text-yellow-500 tracking-widest">Jazz Singer</span>
        <img
          v-if="appStore.questionare.image"
          :src="appStore.questionare.image"
          alt="Jessica Smith"
          class="border-2 border-yellow-500 w-full max-w-xs sm:max-w-md rounded-lg shadow-lg"
        />
        <p class="text-base sm:text-xl font-semibold text-center text-yellow-700"
           :style="`color: ${appStore.selectedColor.three};`">
          “SINGING THAT COMES FROM THE SOUL”
        </p>
      </div>

      <!-- Right Section -->
      <div class="lg:w-1/3 space-y-8 text-gray-700">
        <div class="bg-yellow-100 p-6 rounded-lg shadow-lg">
          <h3 class="text-xl font-bold" :style="`color: ${appStore.selectedColor.three};`">New album available now!</h3>
          <img src="/assets/template-12/album1.jpg" class="w-full rounded-lg object-cover mt-3" />
          <div class="flex justify-between items-center mt-4">
            <span class="text-xl font-bold">$15.00</span>
            <a href="#" class="bg-gray-800 text-white px-4 py-2 rounded hover:bg-gray-700">Buy CD</a>
          </div>
        </div>
        <div class="bg-yellow-100 p-6 rounded-lg shadow-lg">
          <h3 class="text-xl font-bold" :style="`color: ${appStore.selectedColor.three};`">Latest concert video</h3>
          <img src="/assets/template-12/album2.jpg" alt="Concert Video" class="mt-4 rounded-lg w-full object-cover" />
        </div>
      </div>
    </main>

    <!-- Description and Images Section -->
    <section class="py-16">
      <div class="container mx-auto px-0">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
          <!-- Description -->
          <div>
            <h2 class="text-2xl sm:text-4xl font-bold text-yellow-700"
                :style="`color: ${appStore.selectedColor.three};`">
              “COMES FROM THE SOUL”
            </h2>
            <p class="mt-4 text-gray-700 leading-relaxed break-words">
              {{ appStore.questionare.desc }}
            </p>
            <a href="#" class="mt-8 inline-block bg-gray-800 text-white px-6 py-2 rounded hover:bg-gray-700">
              Become a Fan
            </a>
          </div>
          <!-- Image Gallery -->
          <div class="grid grid-cols-3 gap-4">
            <div>
              <img src="/assets/template-12/rolling-stones.jpg" alt="Rolling Stones" class="rounded-lg shadow-lg w-full" />
              <p class="text-center mt-2 text-sm text-gray-600">“ROLLING STONES”</p>
            </div>
            <div>
              <img src="/assets/template-12/clash.jpg" alt="Clash" class="rounded-lg shadow-lg w-full" />
              <p class="text-center mt-2 text-sm text-gray-600">“CLASH”</p>
            </div>
            <div>
              <img src="/assets/template-12/blender.jpg" alt="Blender" class="rounded-lg shadow-lg w-full" />
              <p class="text-center mt-2 text-sm text-gray-600">“BLENDER”</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Audio Player Section -->
    <section class="py-8">
      <div class="container mx-auto px-0 border-yellow-500 p-3 border-2">
        <div class="flex flex-col lg:flex-row items-center justify-between gap-4">
          <h3 class="text-base sm:text-xl font-bold text-gray-800">Listen Online:</h3>
          <div class="flex items-center mt-4 lg:mt-0 w-full lg:w-auto">
            <button class="text-yellow-700 hover:text-yellow-500 mx-2"><i class="fas fa-backward"></i></button>
            <button class="text-yellow-700 hover:text-yellow-500 mx-2"><i class="fas fa-play"></i></button>
            <button class="text-yellow-700 hover:text-yellow-500 mx-2"><i class="fas fa-forward"></i></button>
            <span class="mx-4 flex-grow h-2 rounded-full overflow-hidden bg-gray-200">
              <span class="block bg-yellow-500 h-full" style="width: 50%;"></span>
            </span>
            <span class="text-gray-600 text-xs sm:text-sm ml-2">“MORNING BELL” ALBUM “MY SOUL”</span>
          </div>
        </div>
      </div>
    </section>

    <!-- News Posts Section -->
    <section class="py-16">
      <div class="container mx-auto px-0">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
          <!-- Post 1 -->
          <div class="border-2 border-yellow-500 p-6 rounded-lg shadow-lg text-center">
            <time datetime="2020-07-25" class="block text-4xl font-bold text-gray-800"
                  :style="`color: ${appStore.selectedColor.two};`">25</time>
            <span class="block text-lg text-gray-600">JULY</span>
            <p class="mt-4 text-gray-700" :style="`color: ${appStore.selectedColor.one};`">
              New video of Jessica’s upcoming single “In Your Arms” directed by Adam Peters is already available! Feel free to watch and comment it online. You can also pre-order the song in all music stores today.
            </p>
            <a href="#" class="mt-4 inline-block bg-gray-800 text-white px-4 py-2 rounded hover:bg-gray-700">Read More</a>
          </div>
          <!-- Post 2 -->
          <div class="border-2 border-yellow-500 p-6 rounded-lg shadow-lg text-center">
            <time datetime="2020-07-20" class="block text-4xl font-bold text-gray-800"
                  :style="`color: ${appStore.selectedColor.two};`">20</time>
            <span class="block text-lg text-gray-600">JULY</span>
            <p class="mt-4 text-gray-700" :style="`color: ${appStore.selectedColor.one};`">
              Jessica Smith has recently taken part in Jazz Music Awards 2019 where she received an award as the Best Female Vocalist. Watch the full ceremony and Jessica’s performance on our website.
            </p>
            <a href="#" class="mt-4 inline-block bg-gray-800 text-white px-4 py-2 rounded hover:bg-gray-700">Read More</a>
          </div>
          <!-- Post 3 -->
          <div class="border-2 border-yellow-500 p-6 rounded-lg shadow-lg text-center">
            <time datetime="2020-07-15" class="block text-4xl font-bold text-gray-800"
                  :style="`color: ${appStore.selectedColor.two};`">15</time>
            <span class="block text-lg text-gray-600">JULY</span>
            <p class="mt-4 text-gray-700" :style="`color: ${appStore.selectedColor.one};`">
              English jazz band “Peter Johnson’s Quartet” invited Jessica Smith to work on their next song “A Tale of Winds”. It will appear on the band’s forthcoming album “Coming Home” next year.
            </p>
            <a href="#" class="mt-4 inline-block bg-gray-800 text-white px-4 py-2 rounded hover:bg-gray-700">Read More</a>
          </div>
          <!-- Post 4 -->
          <div class="border-2 border-yellow-500 p-6 rounded-lg shadow-lg text-center">
            <time datetime="2020-07-10" class="block text-4xl font-bold text-gray-800"
                  :style="`color: ${appStore.selectedColor.two};`">10</time>
            <span class="block text-lg text-gray-600">JULY</span>
            <p class="mt-4 text-gray-700" :style="`color: ${appStore.selectedColor.one};`">
              European Summer Jazz Festival invited Jessica Smith to take part as one of the headliners. She is going to perform her most popular songs while also taking part in live collaborations with other artists.
            </p>
            <a href="#" class="mt-4 inline-block bg-gray-800 text-white px-4 py-2 rounded hover:bg-gray-700">Read More</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="py-6">
      <div class="container mx-auto text-center">
        <p class="text-2xl sm:text-4xl font-bold" :style="`color: ${appStore.selectedColor.three};`">Jessica Smith</p>
        <p class="text-base mt-2">© 2024. All rights reserved. <a href="#" class="underline">Privacy Policy</a></p>
      </div>
    </footer>
  </div>
</template>


<script setup>
import { useAppStore } from "@/Stores/app";

const appStore = useAppStore();
</script>
