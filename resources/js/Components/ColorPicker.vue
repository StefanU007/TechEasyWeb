<template>
  <div class="w-full max-w-5xl mx-auto">
    <h1 class="text-2xl sm:text-4xl md:text-5xl lg:text-6xl max-w-full sm:max-w-xl md:max-w-2xl lg:max-w-[628px] mx-auto mt-10 sm:mt-20 md:mt-32 lg:mt-40 text-[#29364B] break-words text-center" style="line-height: 150%;">Choose a palette <br> of colors</h1>
    <div class="mt-8 sm:mt-12 md:mt-20 px-2">
      <div v-for="({ colors, name }, categoryIndex) in appStore.colorCategories" :key="name">
        <h2 class="text-xl sm:text-2xl md:text-3xl mb-3 text-[#29364B] text-center sm:text-left">{{ name }}</h2>
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4 sm:gap-6 w-full">
          <div v-for="(c,colorIndex) in colors" :key="c">
                    <div class="md:flex lg:flex inline-flex rounded-xl overflow-hidden mb-6 border shadow-sm">
                        <button v-for="color in c" :key="color" @click="appStore.setSelectedColor(c)"
                            class="w-10 h-8 sm:w-16 sm:h-12 transition-all duration-200" :style="`background-color: ${color};`"></button>
                    </div>
                </div>
        </div>
      </div>
    </div>
  </div>
</template>


<script setup>
import { useAppStore } from "@/Stores/app";

const appStore = useAppStore();
</script>