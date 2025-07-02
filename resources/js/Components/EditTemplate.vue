<template>
    <div class="min-h-screen flex flex-col">
        <div class="flex flex-col md:flex-row flex-1 overflow-hidden">
            <div class="w-full flex flex-col">
                <div class="flex-1 overflow-auto">
                    <TemplateOne v-if="appStore.selectedTemplate === 1" />
                    <TemplateTwo v-if="appStore.selectedTemplate === 2" />
                    <TemplateThree v-if="appStore.selectedTemplate === 3" />
                    <TemplateFour v-if="appStore.selectedTemplate === 4" />
                    <TemplateFive v-if="appStore.selectedTemplate === 5" />
                    <TemplateSix v-if="appStore.selectedTemplate === 6" />
                    <TemplateSeven v-if="appStore.selectedTemplate === 7" />
                    <TemplateNine v-if="appStore.selectedTemplate === 9" />
                    <TemplateTen v-if="appStore.selectedTemplate === 10" />
                    <TemplateEleven v-if="appStore.selectedTemplate === 11" />
                    <TemplateTwelve v-if="appStore.selectedTemplate === 12" />
                    <Template13 v-if="appStore.selectedTemplate === 13" />
                    <Template14 v-if="appStore.selectedTemplate === 14" />
                    <Template15 v-if="appStore.selectedTemplate === 15" />
                    <Template16 v-if="appStore.selectedTemplate === 16" />
                    <Template17 v-if="appStore.selectedTemplate === 17" />
                    <Template18 v-if="appStore.selectedTemplate === 18" />

                </div>
            </div>

            <div v-if="currentStep !== 0"
                class="bg-white w-full max-w-full sm:w-[500px] md:w-[650px] lg:w-[770px] h-full shadow-md px-3 sm:px-8 md:px-12 lg:px-16 overflow-y-auto overflow-x-hidden mx-auto">
                <ColorPicker v-if="currentStep === 1" />
                <FontPicker v-if="currentStep === 2" />
            </div>
        </div>

        <div class="w-full h-20 sm:h-[100px] md:h-[120px] bg-white flex flex-col sm:flex-row items-center justify-between px-4 sm:px-10 md:px-16 lg:px-20 shadow-md">
            <div class="w-full sm:w-3/5">
                <div class="mt-4 sm:mt-6">
                    <div class="overflow-hidden rounded-full bg-gray-200">
                        <div class="h-2 rounded-full bg-blue-600 transition-all duration-500"
                            :style="`width: ${steps[currentStep]}`"></div>
                    </div>
                    <div class="flex w-full justify-between items-center text-[11px] sm:text-sm font-medium text-gray-600 px-1">
                        <div class="text-blue-600 text-xs sm:text-base text-left">Details</div>
                        <div class="text-center text-blue-600 text-xs sm:text-base">Edit</div>
                        <div class="text-center text-xs sm:text-base" :class="currentStep >= 1 && 'text-blue-600'">
                            Colors
                        </div>
                        <div class="text-right text-xs sm:text-base" :class="currentStep === 2 && 'text-blue-600'">
                            Font
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-12  flex flex-col sm:flex-row items-center gap-3 sm:gap-0">
                <button v-if="currentStep !== 0" @click="currentStep--"
                    class="text-blue-500 underline font-roboto px-4 sm:px-8 text-base sm:text-xl">
                    Back
                </button>
                <button v-else @click="appStore.setCurrentPage('Questionare');"
                    class="text-blue-500 underline font-roboto px-4 sm:px-8 text-base sm:text-xl">
                    Back
                </button>
                <button @click="currentStep === 2 ? goToCheckout() : currentStep++"
                    class="mb-5 w-full sm:w-48 md:w-[255px] h-12 sm:h-16 md:h-[70px] bg-blue-500 uppercase text-base sm:text-xl font-roboto font-bold rounded-md text-white hover:bg-blue-600 transition-all duration-200 mt-2 sm:mt-0">
                    Next
                </button>
            </div>
        </div>
    </div>
</template>

<script setup>
import FontPicker from "@/Components/FontPicker.vue";
import ColorPicker from "@/Components/ColorPicker.vue";
import TemplateOne from "@/Components/templates/TemplateOne.vue";
import TemplateTwo from "@/Components/templates/TemplateTwo.vue";
import TemplateThree from "@/Components/templates/TemplateThree.vue";
import TemplateFour from "@/Components/templates/TemplateFour.vue";
import TemplateFive from "@/Components/templates/TemplateFive.vue";
import TemplateSix from "@/Components/templates/TemplateSix.vue";
import TemplateSeven from "@/Components/templates/TemplateSeven.vue";
import TemplateNine from "@/Components/templates/TemplateNine.vue";
import TemplateTen from "@/Components/templates/TemplateTen.vue";
import TemplateEleven from "@/Components/templates/TemplateEleven.vue";
import TemplateTwelve from "@/Components/templates/TemplateTwelve.vue";
import Template13 from "@/Components/templates/Template13.vue";
import Template14 from "@/Components/templates/Template14.vue";
import Template15 from "@/Components/templates/Template15.vue";
import Template16 from "@/Components/templates/Template16.vue";
import Template17 from "@/Components/templates/Template17.vue";
import Template18 from "@/Components/templates/Template18.vue";

import { useAppStore } from "@/Stores/app";
import { ref } from "vue";

const appStore = useAppStore();

const steps = ["37.5%", "63%", "100%"];

const currentStep = ref(0);

const template = ref();
function goToCheckout() {
    const html = document.getElementById("template").outerHTML;

    const payload = {
        html,
        business_name: appStore.questionare.name,
        description: appStore.questionare.desc,
        location: appStore.questionare.location,
        logo_path: appStore.questionare.logo,
        image_path: appStore.questionare.image,
        template_component_id: appStore.selectedTemplate,
    };

    axios.post("/templates", payload).then(({ data }) => {
        window.location.replace(`/templates/${data.uuid}`);
    });
}
</script>
