<!--Construction Template (3d page)-->

<template>
    <div id="template" class="bg-[#e5e5e5] pt-3 min-h-screen flex flex-col" contenteditable="true">
      <div class="flex items-center px-4 sm:px-8 py-2">
        <img v-if="appStore.questionare.logo" :src="appStore.questionare.logo"
            class="w-24 h-14 object-scale-down" />
        <img v-else src="/assets/svg/logo.svg" class="w-24 h-14 object-scale-down" />
      </div>
 
        <div class="flex flex-col lg:flex-row items-center justify-start px-4 sm:px-8 py-6 gap-8 ">
            <div class="flex-shrink-0 w-full lg:w-1/2 flex justify-center">
                <img v-if="appStore.questionare.image" :src="appStore.questionare.image"
                    class="max-w-full max-h-[300px] md:max-h-[400px] lg:max-h-[550px] rounded-e-full object-scale-down" />
            </div>
            <div class="max-w-md md:w-auto p-6 bg-gray-100 rounded-lg md:mr-20">
                <h2 contenteditable="true" class="uppercase text-lg font-light tracking-widest mb-3"  style="font-weight: 100;letter-spacing:4px;">
                    About us</h2>
                <h1 contenteditable="true" class="text-xl sm:text-2xl md:text-3xl font-bold mb-3 break-all max-w-md text-wrap mr-6" :style="`color: ${appStore.selectedColor.two
                    }; font-family: ${appStore.fonts[appStore.selectedFont]};`">
                    {{ appStore.questionare.name }}
                </h1>
                <p contenteditable="true" class="mt-4 text-base sm:text-lg break-all text-wrap max-w-md  mr-6" :style="`color: ${appStore.selectedColor.three
                    }; font-family: ${appStore.fonts[appStore.selectedFont]};`">
                    {{ appStore.questionare.desc }}
                </p>
                <p class="mt-4 text-base sm:text-lg break-all text-wrap  max-w-md mr-6" :style="`color: ${appStore.selectedColor.one
                    }; font-family: ${appStore.fonts[appStore.selectedFont]};`">
                    Our Location: {{ appStore.questionare.location }}

                </p>
                <button contenteditable="true"
                    class="mt-10 w-fit py-2 px-6 text-sm border border-gray-900 rounded-full hover:bg-black hover:text-white transition">
                    Contact us
                </button>

            </div>
        </div>

        <div class="mt-16 mb-10 px-4">
          <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 max-w-6xl mx-auto">
            <div class="flex flex-col items-start bg-white rounded-xl shadow-2xl border p-5 w-full">
                <img src="/assets/builder/construction1.png" class="w-14 h-14 mb-3" alt="">
                <p class="font-bold text-xl mb-3">DESIGN</p>
                <button class="underline hover:text-orange-500 text-sm">MORE</button>
            </div>
            <div class="flex flex-col items-start bg-white rounded-xl shadow-2xl border p-5 w-full">
                <img src="/assets/builder/construction2.png" class="w-14 h-14 mb-3" alt="">
                <p class="font-bold text-xl mb-3">PLANNING</p>
                <button class="underline hover:text-orange-500 text-sm">MORE</button>
            </div>
            <div class="flex flex-col items-start bg-white rounded-xl shadow-2xl border p-5 w-full">
                <img src="/assets/builder/construction3.png" class="w-14 h-14 mb-3" alt="">
                <p class="font-bold text-xl mb-3">ENGINEERING</p>
                <button class="underline hover:text-orange-500 text-sm">MORE</button>
            </div>
            <div class="flex flex-col items-start bg-white rounded-xl shadow-2xl border p-5 w-full">
                <img src="/assets/builder/construction1.png" class="w-14 h-14 mb-3" alt="">
                <p class="font-bold text-xl mb-3">BUILDING</p>
                <button class="underline hover:text-orange-500 text-sm">MORE</button>
            </div>
            </div>
        </div>

        <footer class="bg-[#333333] h-28 mt-auto flex justify-center items-center">
            <p class="text-xs text-white text-center"><button
                    class="text-sky-400 underline hover:text-gray-500 hover:no-underline">Website Templates</button>
                created with <button class="text-sky-400 underline hover:text-gray-500 hover:no-underline">TE Website
                    Builder.</button></p>
        </footer>

    </div>
</template>

<script setup>
import { useAppStore } from "@/Stores/app";

const appStore = useAppStore();
</script>
