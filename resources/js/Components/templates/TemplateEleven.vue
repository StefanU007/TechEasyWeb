<style>
.header-bg {
    background-image: url('/assets/template-11/gallery-img6.png');
    background-size: cover;
    background-position: center;
}

.service {
    transition: background-color 0.3s ease, color 0.3s ease;
    padding: 20px;
}

.service:hover {
    background-color: #FAC42B;
    color: #000;
}

.service i {
    transition: color 0.3s ease;
}

.service:hover i {
    color: #000;
}

.service h4,
.service p {
    transition: color 0.3s ease;
}

.service:hover h4,
.service:hover p {
    color: #000;
}

.read-more-btn {
    display: none;
    background-color: #000;
    color: #fff;
    padding: 10px 15px;
    margin-top: 10px;
    text-transform: uppercase;
    font-weight: bold;
    border: none;
    cursor: pointer;
}

.service:hover .read-more-btn {
    display: inline-block;
}

.service:hover .read-more-btn:hover {
    color: #FAC42B;
}

.bg-programs {
    background: url('/assets/template-11/news5.png') no-repeat center center;
    background-size: cover;

}

.bg-overlay {
    background: rgba(255, 204, 0, 0.5);
    z-index: 1;
}

.content {
    position: relative;
    z-index: 2;
}
</style>
 

<!--Non-Profit Template (3rd page)-->
<template>
  <div
    id="template"
    contenteditable="true"
    :style="`color: black; font-family: ${appStore.fonts[appStore.selectedFont]};`"
    class="bg-white min-h-screen text-black"
  >
    <!-- Header -->
    <header class="bg-white flex flex-col sm:flex-row justify-between items-center fixed top-0 left-0 w-full z-50  px-2 sm:px-8 py-3 shadow">
      <img v-if="appStore.questionare.logo" :src="appStore.questionare.logo"
        class="w-24 h-14 object-scale-down mb-2 sm:mb-0" />
      <img v-else src="/assets/svg/logo.svg" class="w-24 h-14 object-scale-down mb-2 sm:mb-0" />
      <ul class="flex flex-wrap justify-center gap-2 sm:gap-6 font-sans text-xs sm:text-sm md:text-base font-bold mt-2 sm:mt-0">
                <li class="mx-2  cursor-pointer"><a class="hover:text-yellow-400 transition-colors"
                        :style="`color: ${appStore.selectedColor.three};`"> HOME</a> </li>
                <li class="mx-2"><a class="hover:text-yellow-400 transition-colors cursor-pointer"
                        :style="`color: ${appStore.selectedColor.three};`">ABOUT</a></li>
                <li class="mx-2"><a class="hover:text-yellow-400 transition-colors cursor-pointer"
                        :style="`color: ${appStore.selectedColor.three};`">PROGRAMS</a></li>
                <li class="mx-2"><a class="hover:text-yellow-400 transition-colors cursor-pointer"
                        :style="`color: ${appStore.selectedColor.three};`">STORIES</a></li>
                <li class="mx-2"><a class="hover:text-yellow-400 transition-colors cursor-pointer"
                        :style="`color: ${appStore.selectedColor.three};`">EVENTS</a></li>
            </ul>
    </header>

    <!-- Hero Section -->
    <div class="pt-28 header-bg bg-fixed w-full min-h-[60vh] flex items-center bg-cover bg-center bg-no-repeat">
      <div class="max-w-3xl px-4 sm:px-6 lg:px-8 mx-auto">
        <div class="text-white">
          <h1 class="text-2xl sm:text-4xl md:text-5xl lg:text-7xl font-bold leading-tight mb-4 md:w-[660px] break-words text-wrap w-[360px]"
              :style="`color: ${appStore.selectedColor.three};`">
            {{ appStore.questionare.name }}
          </h1>
          <p class="text-xs sm:text-base md:text-lg mb-6 uppercase tracking-wide md:w-[660px] break-words text-wrap w-[360px]"
             :style="`color: ${appStore.selectedColor.two};`">
            Quisque commodo justo metus, dignissim vulputate est dignissim id.
          </p>
          <a href="#" class="bg-[#FAC42B] text-white font-bold py-2 px-6 rounded shadow hover:bg-yellow-500 transition">
            VIEW MORE
          </a>
        </div>
      </div>
    </div>

    <!-- About Section -->
    <section class="max-w-5xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
      <h2 class="text-2xl sm:text-3xl font-bold mb-4 text-center md:w-[660px] mx-auto break-words text-wrap"
          :style="`color: ${appStore.selectedColor.three};`">ABOUT US</h2>
      <p class="mb-8 text-center text-sm sm:text-base md:w-[660px] break-words text-wrap mx-auto"
         :style="`color: ${appStore.selectedColor.two};`">
        NULLAM VULPUTATE LACUS QUIS PURUS ORNARE, NON VEHICULA FELIS MOLLIS.
      </p>
      <div class="flex flex-col items-center">
        <div class="w-full lg:w-3/4">
          <img v-if="appStore.questionare.image" :src="appStore.questionare.image" class="w-full max-w-full rounded mb-6" />
          <h3 class="text-lg sm:text-2xl font-bold mb-4 md:w-[660px] break-words text-wrap " :style="`color: ${appStore.selectedColor.two};`">
            Be sponsor for a child
          </h3>
          <div class="text-gray-700 text-sm sm:text-base mb-4 md:w-[660px] break-words text-wrap"
               :style="`color: ${appStore.selectedColor.two}; font-family: Arial, Helvetica, sans-serif;`">
            {{ appStore.questionare.desc }}
          </div>
        </div>
      </div>
    </section>

    <!-- Programs Section -->
    <section class="bg-programs py-16 relative">
      <div class="bg-overlay absolute inset-0"></div>
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="mb-12 text-white">
          <h2 class="text-2xl sm:text-4xl font-bold md:w-[660px] break-words text-wrap" :style="`color: ${appStore.selectedColor.three};`">PROGRAMS</h2>
          <p class="text-base sm:text-xl mt-2 md:w-[840px] break-words text-wrap">Nullam vulputate lacus quis purus ornare, non vehicula felis mollis.</p>
        </div>
        <div class="flex flex-wrap -mx-2">
          <div class="w-full md:w-1/3 px-2 mb-8" v-for="n in 3" :key="n">
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
              <img :src="`/assets/template-11/program${n}.png`" :alt="`Program ${n}`" class="mb-4 w-full" />
              <div class="flex items-center mb-4 p-4">
                <i class="fas fa-pencil-alt fa-2x text-yellow-400 mr-2"></i>
                <h4 class="text-lg sm:text-2xl font-bold md:w-[220px] break-words text-wrap w-[300px] mx-auto" :style="`color: ${appStore.selectedColor.two};`">
                  Nullam vulputate lacus
                </h4>
              </div>
              <p class="mb-6 px-4 text-sm sm:text-base md:w-[260px] break-words text-wrap w-[300px] mx-auto" :style="`color: ${appStore.selectedColor.one};`">
                Donec quis nisi a risus egestas consectetur ultrices congue tellus. Aliquam erat volutpat. Quisque purus ipsum, accumsan vitae accumsan sagittis, vulputate non lorem. Vestibulum cursus.
              </p>
              <button class="m-3 bg-yellow-400 text-white py-2 px-4 uppercase font-bold rounded transition-colors">
                Read More
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Stats Section -->
    <section class="bg-white py-12">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="flex flex-wrap justify-around ">
          <div class="w-1/2 sm:w-1/4 mb-8" v-for="(stat, i) in [
            { label: 'Program', value: 100, icon: 'fa-hand-holding-heart' },
            { label: 'Children', value: 1453, icon: 'fa-child' },
            { label: 'Charitable', value: 570, icon: 'fa-users' },
            { label: 'Donation', value: 19658, icon: 'fa-dollar-sign' }
          ]" :key="stat.label">
            <p class="text-3xl sm:text-5xl font-bold" :style="`color: ${appStore.selectedColor.two};`">{{ stat.value }}</p>
            <p class="text-base sm:text-xl" :style="`color: ${appStore.selectedColor.one};`">{{ stat.label }}</p>
            <div class="text-yellow-500 mt-4">
              <i :class="`fas ${stat.icon} fa-2x sm:fa-3x`"></i>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Stories Section -->
    <section class="bg-programs py-16 relative">
      <div class="bg-overlay absolute inset-0"></div>
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="mb-12 text-white">
          <h2 class="text-2xl sm:text-4xl font-bold md:w-[660px] break-words text-wrap" :style="`color: ${appStore.selectedColor.three};`">STORIES</h2>
          <p class="text-base sm:text-xl mt-2 md:w-[660px] break-words text-wrap " :style="`color: ${appStore.selectedColor.one};`">
            Nullam vulputate lacus quis purus ornare, non vehicula felis mollis.
          </p>
        </div>
        <div class="flex flex-wrap -mx-2">
          <div class="w-full md:w-1/3 px-2 mb-8" v-for="n in 3" :key="n">
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
              <img :src="`/assets/template-11/story${n}.png`" :alt="`Story ${n}`" class="mb-4 w-full" />
              <div class="flex items-center mb-4 p-4">
                <i class="fas fa-pencil-alt fa-2x text-yellow-400 mr-2"></i>
                <h4 class="text-lg sm:text-2xl w-[300px] font-bold md:w-[220px] mx-auto break-words text-wrap" :style="`color: ${appStore.selectedColor.two};`">
                  Nullam vulputate lacus
                </h4>
              </div>
              <p class="mb-6 px-4 text-sm sm:text-base w-[220px] mx-auto break-words text-wrap" :style="`color: ${appStore.selectedColor.one};`">
                Donec quis nisi a risus egestas consectetur ultrices congue tellus. Aliquam erat volutpat. Quisque purus ipsum, accumsan vitae accumsan sagittis, vulputate non lorem. Vestibulum cursus.
              </p>
              <button class="m-3 bg-yellow-400 text-white py-2 px-4 uppercase font-bold rounded transition-colors">
                Read More
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Donation Section -->
    <section class="flex flex-col md:flex-row items-center justify-between bg-yellow-500 p-6 md:p-12 gap-8">
      <div class="flex-1">
        <p class="text-base sm:text-lg font-semibold md:w-[420px] break-words text-wrap">YOU'VE HELPED US RAISE A STAGGERING</p>
        <p class="text-3xl sm:text-6xl font-bold md:w-[420px] break-words text-wrap">$53,426</p>
        <div class="bg-gray-200 rounded-full h-4 w-full mt-4">
          <div class="bg-black h-4 rounded-full md:w-[420px] break-words text-wrap" style="width: 60%;"></div>
        </div>
      </div>
      <div class="flex-1 mt-6 md:mt-0 md:text-right">
        <p class="mb-4 text-sm sm:text-base md:w-[440px] break-words text-wrap w-[300px]" :style="`color: ${appStore.selectedColor.one};`">
          Pellentesque eu malesuada nisi. Phasellus eget ornare arcu, et condimentum arcu. Phasellus vitae posuere nisi, at venenatis velit. Morbi lacinia lacus non consectetur accumsan.
        </p>
        <button class="bg-black text-white font-bold py-2 px-4 rounded">DONATE</button>
      </div>
    </section>

    <!-- Gallery -->
    <section class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-6 w-full">
      <img v-for="n in 6" :key="n" :src="`/assets/template-11/gallery-img${n}.png`" alt="Gallery" class="w-full h-auto object-cover" />
    </section>

    <!-- Footer -->
    <footer class="bg-yellow-500 text-black pt-10">
      <div class="max-w-screen-xl mx-auto px-4 grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- ZAKAT Section -->
        <div>
          <h2 class="font-bold text-lg mb-4" :style="`color: ${appStore.selectedColor.three};`">ZAKAT</h2>
          <p class="mb-4">
            Sed lacus lectus, consectetur commodo lobortis in, tincidunt ac risus. Suspendisse id ligula volutpat.
          </p>
          <div class="flex space-x-4">
            <a href="#" class="text-black bg-white bg-opacity-20 p-2 rounded-full"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="text-black bg-white bg-opacity-20 p-2 rounded-full"><i class="fab fa-twitter"></i></a>
            <a href="#" class="text-black bg-white bg-opacity-20 p-2 rounded-full"><i class="fab fa-youtube"></i></a>
          </div>
        </div>
        <!-- CONTACT Section -->
        <div>
          <h2 class="font-bold text-lg mb-4" :style="`color: ${appStore.selectedColor.three};`">CONTACT</h2>
          <p class="mb-2"><i class="fas fa-map-marker-alt"></i> {{ appStore.questionare.location }}</p>
          <p class="mb-2"><i class="fas fa-phone"></i> (917) 162-6930</p>
          <p><i class="fas fa-envelope"></i> info@company.org</p>
        </div>
        <!-- NEWSLETTER Section -->
        <div>
          <h2 class="font-bold text-lg mb-4" :style="`color: ${appStore.selectedColor.three};`">NEWSLETTER</h2>
          <p class="mb-4" :style="`color: ${appStore.selectedColor.one};`">
            Etiam congue mi vitae eleifend ullamcorper. Vestibulum gravida aliquet purus, nec laoreet massa malesuada a.
          </p>
          <div class="flex">
            <input type="email" placeholder="Your Email" class="px-4 py-2 w-full text-black rounded-l" />
            <button class="bg-black text-white px-4 py-2 rounded-r">SUBSCRIBE</button>
          </div>
        </div>
      </div>
      <div class="bg-black text-white py-7 mt-10">
        <div class="max-w-screen-xl mx-auto px-4 flex flex-col md:flex-row justify-between items-center text-xs sm:text-sm">
          <p>&copy; 2020 Zakat All rights reserved by Ninetheme</p>
          <div class="flex space-x-4 mt-2 md:mt-0">
            <a href="#" class="hover:underline">About</a>
            <a href="#" class="hover:underline">Press</a>
            <a href="#" class="hover:underline">FAQ</a>
            <a href="#" class="hover:underline">Privacy</a>
            <a href="#" class="hover:underline">Connect</a>
          </div>
        </div>
      </div>
    </footer>
  </div>
</template>

<script setup>
import { useAppStore } from "@/Stores/app";

const appStore = useAppStore();
</script>
