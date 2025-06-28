<template>
    <div class="mb-8 sm:mb-12 md:mb-20">
        <!-- Logo -->
        <div class="ml-2 sm:ml-4 mt-2 sm:mt-4">
            <img src="/assets/svg/logo.svg" class="h-16 sm:h-24 md:h-[113px] w-auto max-w-full" alt="Logo" />
        </div>

        <div class="h-6 sm:h-12 md:h-16 lg:h-20"></div>

        <!-- Dream Image -->
        <div class="relative w-full">
            <div class="absolute left-0 right-0 -top-8 sm:-top-16 md:-top-24 w-full flex justify-center z-0">
                <img src="/assets/svg/dream.svg" class="w-full max-w-full h-auto object-cover
             sm:w-full md:w-full lg:w-full xl:w-full" style="min-width:320px;" alt="Background Image"/>
            </div>
        </div>

        <div class="h-6 sm:h-12 md:h-16 lg:h-20"></div>

        <!-- Question Heading -->
        <div class="flex flex-col justify-center items-center mt-12 sm:mt-20 md:mt-28 lg:mt-36 px-2">
            <h1 class="font-semibold italic text-2xl sm:text-4xl md:text-5xl lg:text-6xl text-center leading-tight">
                {{ questions[currentQuestion].question }}
            </h1>
        </div>

        <!-- NAME Question -->
        <div v-if="currentQuestion === 0">
            <div class="mt-8 sm:mt-12 flex flex-col sm:flex-row justify-center items-center gap-3 sm:gap-0 h-auto sm:h-[70px] px-2">
                <input v-model="appStore.questionare[questions[currentQuestion].model]" @input="error = false"
                    type="text" placeholder="Enter your name"
                    class="rounded-l-md text-base sm:text-xl border-blue-500 w-full sm:w-[400px] md:w-[600px] lg:w-[838px] focus:outline-none focus:ring-0 py-3 px-4"
                    :class="error === true && 'bg-red-200'" />

                <button @click="handleNext"
                    class="bg-blue-500 uppercase rounded-md sm:rounded-l-none sm:rounded-r-md text-white w-full sm:w-40 md:w-56 lg:w-[255px] font-roboto font-bold py-3 px-4 mt-3 sm:mt-0 hover:shadow-xl hover:shadow-blue-500/50 transition-all duration-200">
                    Next
                </button>
            </div>
            <p v-if="error" class="text-red-500 text-center mt-2 text-sm">
                Please write your company name (min 4 letters)
            </p>
        </div>

        <!-- DESCRIPTION Question -->
        <div v-if="currentQuestion === 1" class="mt-8 sm:mt-12 flex flex-col items-center px-2">
            <textarea @input="error = false" v-model="appStore.questionare[questions[currentQuestion].model]"
                placeholder="Enter your description..." cols="65" rows="6" class="w-full max-w-full sm:max-w-lg md:max-w-xl lg:max-w-2xl text-base sm:text-xl border-blue-500 rounded-md p-3 focus:outline-none focus:ring-0 resize-y min-h-[120px] sm:min-h-[180px]"
                :class="error === true && 'bg-red-200'" />
            <p v-if="error" class="text-red-500 text-center mt-2 text-sm">
                Please write at least 1 and up to a maximum of 200 words.
            </p>
            <p class="text-slate-500 w-full max-w-full sm:max-w-lg md:max-w-xl lg:max-w-2xl text-right text-xs sm:text-sm mt-1">Max 200 words</p>
        </div>

        <!-- LOCATION Question -->
        <div v-if="currentQuestion === 2" class="mt-8 sm:mt-12 flex justify-center items-center flex-col px-2">
            <div class="relative w-full max-w-full sm:max-w-md md:max-w-lg">
                <input v-model="appStore.questionare[questions[currentQuestion].model]" type="text"
                    placeholder="Enter your location" @input="error = false"
                    class="rounded-md pl-10 text-base sm:text-xl border-blue-500 w-full h-12 sm:h-16 focus:outline-none focus:ring-0"
                    :class="error === true && 'bg-red-200'" />
                <img class="absolute top-3 left-2.5" src="/assets/svg/location.svg" />
            </div>
        </div>

        <!-- LOGO Question -->
        <div v-if="currentQuestion === 3" class="mt-8 sm:mt-12 flex justify-center items-center flex-col px-2">
            <label v-if="!appStore.questionare.logo" for="uploadLogo"
                class="bg-white text-center rounded w-full max-w-full sm:max-w-xs md:max-w-sm min-h-[120px] sm:min-h-[160px] md:min-h-[180px] py-4 px-2 sm:px-4 flex flex-col items-center justify-center cursor-pointer border-2 border-blue-300 mx-auto font-[sans-serif] transition-shadow duration-200 hover:shadow-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 sm:w-10 mb-2 sm:mb-3 fill-gray-400" viewBox="0 0 24 24">
                    <path
                        d="M22 13a1 1 0 0 0-1 1v4.213A2.79 2.79 0 0 1 18.213 21H5.787A2.79 2.79 0 0 1 3 18.213V14a1 1 0 0 0-2 0v4.213A4.792 4.792 0 0 0 5.787 23h12.426A4.792 4.792 0 0 0 23 18.213V14a1 1 0 0 0-1-1Z"
                        data-original="#000000" />
                    <path
                        d="M6.707 8.707 11 4.414V17a1 1 0 0 0 2 0V4.414l4.293 4.293a1 1 0 0 0 1.414-1.414l-6-6a1 1 0 0 0-1.414 0l-6 6a1 1 0 0 0 1.414 1.414Z"
                        data-original="#000000" />
                </svg>
                <p class="text-gray-400 font-semibold text-xs sm:text-sm">
                    <span class="text-[#007bff]">Choose file</span> to upload
                </p>
                <input @change="uploadLogo($event, 'logo')" type="file" id="uploadLogo" class="hidden" />
                <p class="text-[10px] sm:text-xs text-gray-400 mt-2">
                    Business logo with appropriate file format (PNG, JPG, and SVG )
                </p>
            </label>
            <div v-else class="font-semibold mt-4 text-center text-base sm:text-lg" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">Your logo is uploaded</div>
        </div>

        <!-- IMAGE Question -->
        <div v-if="currentQuestion === 4" class="mt-8 sm:mt-12 flex justify-center items-center flex-col px-2">
            <p class="font-semibold pb-6 sm:pb-10 -mt-4 sm:-mt-10 text-center text-base sm:text-lg md:text-xl" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">(Enter your custom image for your business!)</p>
            <label v-if="!appStore.questionare.image" for="uploadImage"
                class="bg-white text-center rounded w-full max-w-full sm:max-w-xs md:max-w-sm min-h-[120px] sm:min-h-[160px] md:min-h-[180px] py-4 px-2 sm:px-4 flex flex-col items-center justify-center cursor-pointer border-2 border-blue-300 mx-auto font-[sans-serif] transition-shadow duration-200 hover:shadow-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 sm:w-10 mb-2 sm:mb-3 fill-gray-400" viewBox="0 0 24 24">
                    <path
                        d="M22 13a1 1 0 0 0-1 1v4.213A2.79 2.79 0 0 1 18.213 21H5.787A2.79 2.79 0 0 1 3 18.213V14a1 1 0 0 0-2 0v4.213A4.792 4.792 0 0 0 5.787 23h12.426A4.792 4.792 0 0 0 23 18.213V14a1 1 0 0 0-1-1Z"
                        data-original="#000000" />
                    <path
                        d="M6.707 8.707 11 4.414V17a1 1 0 0 0 2 0V4.414l4.293 4.293a1 1 0 0 0 1.414-1.414l-6-6a1 1 0 0 0-1.414 0l-6 6a1 1 0 0 0 1.414 1.414Z"
                        data-original="#000000" />
                </svg>
                <p class="text-gray-400 font-semibold text-xs sm:text-sm">
                    <span class="text-[#007bff]">Choose file</span> to upload
                </p>
                <input @change="uploadLogo($event, 'image')" type="file" id="uploadImage" class="hidden" />
                <p class="text-[10px] sm:text-xs text-gray-400 mt-2">
                    Image with appropriate file format (PNG, JPG, and SVG )
                </p>
            </label>
            <div v-else class="font-semibold mt-4 text-center text-base sm:text-lg" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">Your image is uploaded</div>

            <!-- Error message for image upload -->
            <p v-if="error && !appStore.questionare.image" class="text-red-500 text-center mt-4 text-sm">
                Please upload your image
            </p>
        </div>

        <!-- Fixed buttons container -->
        <div v-if="currentQuestion !== 0" class="fixed bottom-4 left-1/2 transform -translate-x-1/2 w-[98vw] max-w-md sm:bottom-8 sm:right-8 sm:left-auto sm:translate-x-0 sm:w-auto z-50 flex flex-col sm:flex-row gap-3 sm:gap-4 px-2 sm:px-0">
            <button
                v-if="currentQuestion === 3"
                @click="currentQuestion++"
                class="text-blue-500 underline font-roboto px-4 sm:px-8 text-base sm:text-xl"
                >
                Skip
            </button>
            <button
                v-else
                @click="currentQuestion > 0 ? currentQuestion-- : null"
                class="text-blue-500 underline font-roboto px-4 sm:px-8 text-base sm:text-xl"
            >   
            Back
            </button>
            <button
                @click="handleNext"
                class="bg-blue-500 h-12 sm:h-16 uppercase rounded-md text-white w-full sm:w-40 font-roboto font-bold hover:shadow-xl hover:shadow-blue-500/50 transition-all duration-200"
            >
            Next
            </button>
        </div>
    </div>
</template>


<script setup>
import { ref } from "vue";
import { useAppStore } from "@/Stores/app";

const appStore = useAppStore();

const error = ref(false);
const currentQuestion = ref(0);

const questions = [
    {
        question: "What is your business name?",
        model: "name",
    },
    {
        question: "Enter your description for your website",
        model: "desc",
    },
    {
        question: "Enter your location",
        model: "location",
    },
    {
        question: "Enter your logo",
        model: "logo",
    },
    {
        question: "Enter your image",
        model: "image",
    }
];

function uploadLogo(event, type) {
    let formData = new FormData();

    formData.set("image", event.target.files[0]);

    axios
        .post("/logo-upload", formData, {
            headers: {
                "content-type": "multipart/form-data",
            },
        })
        .then(({ data }) => {
            appStore.questionare[type] = data.path;
        });


}

function handleNext() {
    if (currentQuestion.value === 0) {
        if (appStore.questionare[questions[currentQuestion.value].model].length > 3) {
            error.value = false;
            currentQuestion.value++;
        } else {
            error.value = true;
        }
    } else if (currentQuestion.value === 1) {
        if (appStore.questionare[questions[currentQuestion.value].model].length > 0 && appStore.questionare[questions[currentQuestion.value].model].length <= 800) {
            error.value = false;
            currentQuestion.value++;
        } else {
            error.value = true;
        }
    } else if (currentQuestion.value === 2) {
        currentQuestion.value++;
    } else if (currentQuestion.value === 3) {
        currentQuestion.value++;
    } else if (currentQuestion.value === 4) {
        if (appStore.questionare.image) {
            error.value = false;
            appStore.setCurrentPage('EditTemplate');
        } else {
            error.value = true;
        }
    }
}
</script>


<style scoped>
.fixed {
    position: fixed;
}

.bottom-10 {
    bottom: 2.5rem;
    /* Adjust this value as needed */
}

.right-10 {
    right: 2.5rem;
    /* Adjust this value as needed */
}

.flex {
    display: flex;
}

.gap-4 {
    gap: 1rem;
    /* Space between buttons */
}
</style>
