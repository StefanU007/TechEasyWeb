<!--Biography Template 3rd page-->
<template>
  <div
    id="template"
    class="template bg-gray-100 min-h-screen w-full"
    contenteditable="true"
    :style="`font-family: ${appStore.fonts[appStore.selectedFont]};`"
  >
    <!-- Navbar -->
    <nav class="bg-[#9D827D] shadow-md w-full top-0 bg-opacity-40">
      <div class="flex flex-col sm:flex-row items-center px-2 sm:px-5 py-3 mr-6">
        <img
          v-if="appStore.questionare.logo"
          :src="appStore.questionare.logo"
          class="w-24 h-14 object-contain mb-2 sm:mb-0 sm:ml-6 mr-6"
        /> 
        <img
          v-else
          src="/assets/svg/logo.svg"
          class="w-24 h-14 object-contain mb-2 sm:mb-0 sm:ml-6"
        />
        <ul class="ml-10 flex flex-wrap justify-center gap-3 sm:gap-6 w-full sm:w-auto mt-2 sm:mt-0 font-bold">
          <li><a href="#" class="text-black hover:text-blue-500 text-sm sm:text-base">Home</a></li>
          <li><a href="#" class="text-black hover:text-blue-500 text-sm sm:text-base">About</a></li>
          <li><a href="#" class="text-black hover:text-blue-500 text-sm sm:text-base">Qualifications</a></li>
          <li><a href="#" class="text-black hover:text-blue-500 text-sm sm:text-base">Education</a></li>
        </ul>
      </div>
    </nav>

    <div class="flex flex-col md:flex-row w-full">
      <!-- Left Column -->
      <div class="md:w-1/2 bg-[#9D827D] flex flex-col items-center py-8 px-4">
        <img
          v-if="appStore.questionare.image"
          :src="appStore.questionare.image"
          alt="Profile"
          class="w-full max-w-xs sm:max-w-md md:max-w-full h-54 sm:h-96 md:h-[70vh] object-top object-cover rounded-lg mb-6"
        />
        <div class="p-2 sm:p-5 text-center md:text-left">
          <p
            class="text-2xl md:w-[360px] mx-auto sm:text-4xl md:text-5xl lg:text-7xl font-bold font-playfair leading-tight mb-2 break-all text-wrap"
            :style="`color: ${appStore.selectedColor.one};`"
          >
            {{ appStore.questionare.name }}
          </p>
          <p
            class="text-lg md:w-[360px]  sm:text-2xl font-bold font-playfair mb-2 text-wrap break-all"
            :style="`color: ${appStore.selectedColor.two};`"
          >
            Real Estate Agent
          </p>
          <p
            class="text-base md:w-[360px]  sm:text-lg font-playfair text-wrap break-all mb-4"
            :style="`color: ${appStore.selectedColor.two};`"
          >
            Oasis Ventures Realty
          </p>
        </div>
      </div>

      <!-- Right Column -->
      <div class="md:w-1/2 bg-gray-700 text-white p-4 sm:p-8 flex flex-col justify-center">
        <!-- About -->
        <div class="mb-8 font-playfair">
          <h2
            class="text-lg md:w-[360px]  sm:text-2xl  font-semibold mb-2 pb-1  break-words text-wrap"
            :style="`color: ${appStore.selectedColor.two};`"
          >
            About
          </h2>
          <div class="border-b-4 border-white w-20 sm:w-32 mb-3"></div>
          <p
            class="leading-7 break-words md:w-[420px] "
            :style="`color: ${appStore.selectedColor.three};`"
          >
            {{ appStore.questionare.name }}
          </p>
        </div>
        <!-- Qualification -->
        <div class="font-playfair mb-8">
          <h2
            class="text-lg md:w-[360px]  sm:text-2xl font-semibold mb-2 pb-1  break-words text-wrap"
            :style="`color: ${appStore.selectedColor.two};`"
          >
            Qualification
          </h2>
          <div class="border-b-4 border-white w-32 sm:w-52 mb-3"></div>
          <ul>
            <li
              class="flex items-center mb-2 break-all text-wrap md:w-[420px] "
              :style="`color: ${appStore.selectedColor.three};`"
            >
              <i class="fas fa-check-circle text-white mr-2 break-all text-wrap " contenteditable="false"></i>
              Sales Management for Real Estate Certificate (August 2060)
            </li>
            <li
              class="flex items-center break-all text-wrap md:w-[420px]"
              :style="`color: ${appStore.selectedColor.three};`"
            >
              <i class="fas fa-check-circle text-white mr-2 break-all text-wrap" contenteditable="false"></i>
              Property Management Certificate (June 2063)
            </li>
          </ul>
        </div>
        <!-- Location -->
        <div class="font-playfair">
          <h2
            class="text-lg sm:text-2xl md:w-[360px]  font-semibold mb-2 pb-1  break-words text-wrap"
            :style="`color: ${appStore.selectedColor.two};`"
          >
            Location
          </h2>
          <div class="border-b-4 border-white w-32 sm:w-52 mb-3 text-wrap break-all"></div>
          <ul>
            <li
              class="flex items-center mb-2 break-all md:w-[420px]  text-wrap"
              :style="`color: ${appStore.selectedColor.three};`"
            >
              <i class="fas fa-check-circle text-white mr-2" contenteditable="false"></i>
              {{ appStore.questionare.location }}
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</template>




<script setup>
import { useAppStore } from "@/Stores/app";

const appStore = useAppStore();
</script>
