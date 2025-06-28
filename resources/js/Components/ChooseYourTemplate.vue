<template>
  <div class="mb-8 sm:mb-12 md:mb-20">
    <div class="ml-2 sm:ml-4 mt-2 sm:mt-4">
      <img src="/assets/svg/logo.svg" class="h-16 sm:h-24 md:h-[113px] w-auto max-w-full" alt="Logo"/>
    </div>

    <div class="h-6 sm:h-12 md:h-16 lg:h-20"></div>


    <div class="relative w-full">
      <div class="absolute left-0 right-0 -top-8 sm:-top-16 md:-top-24 w-full flex justify-center z-0">
        <img src="/assets/svg/dream.svg" class="w-full max-w-full h-auto object-cover
             sm:w-full md:w-full lg:w-full xl:w-full"
      style="min-width:320px;" alt="Background Image"/>
      </div>

      <div class="h-6 sm:h-12 md:h-16 lg:h-20"></div>

    </div>

    <div class="flex flex-col justify-center items-center mt-6 sm:mt-10 md:mt-16 px-2">
      <h1 class="font-semibold italic text-2xl sm:text-4xl md:text-5xl lg:text-6xl text-center">Choose your template</h1>
      <p class="mt-3 sm:mt-5 text-center max-w-full sm:max-w-xl md:max-w-2xl lg:max-w-[797px] text-sm sm:text-base md:text-lg text-slate-500">
        Select a template that fits your style and needs. You can customize it to make your webpage unique and
        personal!
      </p>
    </div>

    <div class="mt-8 sm:mt-12 md:mt-20 flex justify-center px-2">
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-10 lg:gap-14 w-full max-w-full md:max-w-4xl lg:max-w-[1590px]">
        <button v-for="template in templatePages[page]" :key="template.id"
          @click="appStore.setSelectedTemplate(template.id)"
          class="border hover:border-blue-500 hover:shadow-2xl transition-opacity duration-300 bg-white rounded-lg overflow-hidden w-full" :class="[
            appStore.selectedTemplate === template.id
              ? 'border-blue-500 shadow-2xl opacity-100'
              : appStore.selectedTemplate
                ? 'opacity-50'
                : 'border-transparent opacity-100',
          ]">
          
          <div class="text-center text-base sm:text-lg font-semibold mb-2 mt-2">
            {{ getTitle(template.id) }}
          </div>
          
          <img :src="template.image" class="w-full h-40 sm:h-60 md:h-72 lg:h-[302px] object-cover object-bottom transition-all duration-300" />
        </button>
      </div>
    </div>

    <div class="mt-6 sm:mt-8 md:mt-11 flex justify-center items-center space-x-2 sm:space-x-3 md:space-x-4 pb-4">
      <div v-for="(_, i) in templatePages" :key="i" @click="page = i"
        class="rounded-full flex items-center justify-center cursor-pointer transition-all duration-200" :class="[
          page === i
            ? 'w-8 h-8 sm:w-10 sm:h-10 border-2 border-blue-500 bg-white'
            : 'w-3 h-3 sm:w-4 sm:h-4 bg-blue-500',
        ]">
        <div v-if="page === i" class="w-5 h-5 sm:w-6 sm:h-6 rounded-full bg-blue-500"></div>
      </div>
    </div>

    <div class="flex justify-end items-center mx-2 sm:mx-8 md:mx-16">
      <!-- <button class="text-blue-500 text-base sm:text-lg md:text-xl underline font-roboto px-4 sm:px-8">Skip</button> -->
      <button @click="appStore.setCurrentPage('Questionare')"
        class="w-full sm:w-48 md:w-[255px] h-12 sm:h-16 md:h-[70px] bg-blue-500 uppercase text-base sm:text-lg md:text-xl font-roboto font-bold rounded-md text-white hover:bg-blue-600 transition-all duration-200">
        Next
      </button>
    </div>
  </div>
</template>

<script setup>
import { ref } from "vue";
import { useAppStore } from "@/Stores/app";

const emit = defineEmits(["change-page"]);

const appStore = useAppStore();

const page = ref(0);

const templatePages = [
[
    { id: 13, name: "template13", image: "/assets/images/templates/13.png", title: "Construction" },
    { id: 15, name: "template15", image: "/assets/images/templates/15.png", title: "General" },
    { id: 16, name: "template16", image: "/assets/images/templates/16.png", title: "Nonprofit" },
    { id: 17, name: "template17", image: "/assets/images/templates/17.png", title: "Restaurant" },
    { id: 18, name: "template18", image: "/assets/images/templates/18.png", title: "Store" },
    { id: 14, name: "template14", image: "/assets/images/templates/14.png", title: "Finance" },
  ],
  [
    { id: 1, name: "template1", image: "/assets/images/templates/1.webp", title: "Finance" },
    { id: 2, name: "template2", image: "/assets/images/templates/2.avif", title: "General" },
    { id: 3, name: "template3", image: "/assets/images/templates/3.avif", title: "Restaurant" },
    { id: 4, name: "template4", image: "/assets/images/templates/4.avif", title: "Construction" },
    { id: 5, name: "template5", image: "/assets/images/templates/5.avif", title: "Store" },
    { id: 6, name: "template6", image: "/assets/images/templates/6.webp", title: "Nonprofit" }
  ],
  [
    { id: 7, name: "template7", image: "/assets/images/templates/7.png", title: "Construction" },
    { id: 9, name: "template9", image: "/assets/images/templates/9.png", title: "Biography" },
    { id: 10, name: "template10", image: "/assets/images/templates/10.png", title: "Bakery" },
    { id: 11, name: "template11", image: "/assets/images/templates/11.png", title: "Nonprofit" },
    { id: 12, name: "template12", image: "/assets/images/templates/12.png", title: "Music" }
  ],
  
];

  appStore.selectedTemplate = 13;

const getTitle = (id) => {
  const template = templatePages[page.value].find(t => t.id === id);
  return template ? template.title : '';
};
</script>
