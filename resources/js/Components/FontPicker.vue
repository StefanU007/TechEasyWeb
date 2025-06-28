<template>
    <h1 class="w-full text-2xl sm:text-4xl md:text-5xl lg:text-6xl max-w-2xl md:max-w-3xl lg:max-w-[628px] mt-10 sm:mt-20 md:mt-32 lg:mt-40 text-[#29364B] break-words mx-auto text-center" style="font-family:Literata;">Choose a font</h1>
    <p class="w-full max-w-2xl md:max-w-3xl lg:max-w-[628px] text-base sm:text-lg md:text-xl mt-4 sm:mt-8 text-slate-500 break-words px-2 mx-auto text-center sm:text-left">These custom pairings were curated by our designers.
        <br> There are other font options you can explore later.
    </p>
    <div class="pb-10 mt-8 sm:mt-12 md:mt-20 grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 gap-3 sm:gap-6 px-2">
        <div v-for="(font, index) in appStore.fonts" :key="font">
            <div class="flex justify-center">
                <button @click="appStore.setSelectedFont(index)" class="w-full  h-16 sm:w-32 sm:h-28 md:w-[180px] md:h-[140px] border transition-all duration-200 overflow-hidden text-ellipsis break-words px-2 text-xs sm:text-sm md:text-base lg:text-lg"
                    :style="`font-family: ${font};`" :class="appStore.selectedFont === index
                        ? 'bg-[#29364B] text-white'
                        : 'bg-white text-[#29364B]'
                        ">
                    {{ font }}
                </button>
            </div>
        </div>
    </div>
</template>

<script setup>
import { useAppStore } from "@/Stores/app";

const appStore = useAppStore();
</script>
