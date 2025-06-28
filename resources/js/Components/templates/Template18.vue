<!--Store Template (FIRST PAGE)-->
<template>
  <div
    id="template"
    class="bg-[#f6f2ea] w-full min-h-screen bg-cover bg-center bg-no-repeat"
    contenteditable="true"
    :style="`color: ${appStore.selectedColor.three}; font-family: ${appStore.fonts[appStore.selectedFont]}; background-image: url(/assets/images/templates/18.png);`"
  >
    <!-- Header -->
    <div class="px-2 sm:px-4 py-4 flex flex-col sm:flex-row items-center justify-between bg-[#333333] z-20">
      <img
        v-if="appStore.questionare.logo"
        :src="appStore.questionare.logo"
        class="w-20 h-12 sm:w-28 sm:h-16 object-scale-down mb-2 sm:mb-0 sm:ml-6"
        alt="Logo"
      />
      <img
        v-else
        src="/assets/svg/logo.svg"
        class="w-20 h-12 sm:w-28 sm:h-16 object-scale-down mb-2 sm:mb-0 sm:ml-6"
        alt="Logo"
      />
     <ul class="flex flex-wrap justify-center w-full  sm:w-auto gap-x-2 sm:gap-x-6 gap-y-2 py-2">
        <li class="font-bold font-raleway text-xs sm:text-sm md:text-base">
          <a
            class="tracking-widest hover:text-red-500 transition duration-700 ease-in-out cursor-pointer"
            :style="`color: ${'#fff' || appStore.selectedColor.two};`"
            >Home</a
          >
        </li>
        <li class="font-bold font-raleway text-xs sm:text-sm md:text-base">
          <a
            class="tracking-widest hover:text-red-500 transition duration-700 ease-in-out cursor-pointer"
            :style="`color: ${'#fff' || appStore.selectedColor.two};`"
            >About</a
          >
        </li>
        <li class="font-bold font-raleway text-xs sm:text-sm md:text-base">
          <a
            class="tracking-widest hover:text-red-500 transition duration-700 ease-in-out cursor-pointer"
            :style="`color: ${'#fff' || appStore.selectedColor.two};`"
            >Menu</a
          >
        </li>
        <li class="font-bold font-raleway text-xs sm:text-sm md:text-base">
          <a
            class="tracking-widest hover:text-red-500 transition duration-700 ease-in-out cursor-pointer"
            :style="`color: ${'#fff' || appStore.selectedColor.two};`"
            >Team</a
          >
        </li>
        <li class="font-bold font-raleway text-xs sm:text-sm md:text-base">
          <a
            class="tracking-widest hover:text-red-500 transition duration-700 ease-in-out cursor-pointer"
            :style="`color: ${'#fff' || appStore.selectedColor.two};`"
            >Contact</a
          >
        </li>
        <li class="font-bold font-raleway text-xs sm:text-sm md:text-base">
          <a
            class="tracking-widest hover:text-red-500 transition duration-700 ease-in-out cursor-pointer"
            :style="`color: ${'#fff' || appStore.selectedColor.two};`"
            >News</a
          >
        </li>
      </ul>
    </div>

    <!-- Main Section: Name/Info and Description/Image -->
    <div class="flex flex-col lg:flex-row px-2 sm:px-5 pt-10 mb-16 gap-8">
      <!-- Name/Info Section -->
      <div class="flex-1 flex flex-col items-center lg:items-start">
        <div class="relative w-full max-w-xl mx-auto" @click="hideEditIcon('name')">
          <div
            v-if="editIconVisibleName"
            @click.stop="hideEditIcon('name')"
            class="absolute left-1/2 -translate-x-1/2 lg:left-48 lg:translate-x-0 -top-14 bg-gray-200 p-2 rounded-lg shadow-lg"
          >
            <p class="text-gray-800 text-sm">Click to edit</p>
            <div class="w-1 h-5 bg-gray-200 absolute top-full left-1/2 lg:left-12 -ml-1 lg:ml-0 shadow-lg"></div>
          </div>
          <h1
            class="mx-auto md:w-[360px] text-center px-2 sm:px-5 text-2xl sm:text-4xl md:text-5xl lg:text-[65px] font-playfair font-bold opacity-100 leading-tight break-words text-wrap"
            :style="`color: ${appStore.selectedColor.one};`"
          >
            {{ appStore.questionare.name }}
          </h1>
        </div>
        <p
          class="font-bold underline font-raleway text-[#1F3571] tracking-widest pt-12 text-xs sm:text-sm border-solid w-full text-center mt-10"
          :style="`color: ${appStore.selectedColor.three};`"
        >
          OPEN HOURS:
        </p>
        <p class="font-bold w-full text-center text-sm sm:text-base mt-2">
          Monday - Friday: 12PM - 10PM<br />
          Saturday - Sunday: 10AM - 11PM
        </p>
        <p class="underline font-bold w-full text-center text-sm sm:text-base mt-6">RESERVATIONS:</p>
        <p class="font-bold w-full text-center text-sm sm:text-base mt-2">
          contact@domain.com<br />
          +1-800-000-111
        </p>
        <a
          href="#product"
          contenteditable="false"
          class="hover:bg-[#ea2a3d] w-full sm:w-80 mx-auto text-center mt-10 hover:text-white cursor-pointer font-bold border-[#ea2a3d] border-solid border-2 text-xs sm:text-base text-[#ea2a3d] bg-white opacity-70 font-raleway tracking-widest py-3 px-6 rounded"
        >
          CHECK OUR PRICES
        </a>
      </div>

      <!-- Description/Image Section -->
      <div class="w-full lg:w-1/2 flex flex-col items-center lg:items-end lg:ml-auto mt-10 lg:mt-0">
        <div class="w-full max-w-2xl">
          <img
            v-if="appStore.questionare.image"
            :src="appStore.questionare.image"
            :style="`border-color: ${appStore.selectedColor.two};`"
            class="w-full rounded-lg mt-10 mb-6 border-4"
            alt="Background Image"
          />
          <img
            v-else
            src="/assets/template-2/dina-seafood-1.png"
            class="opacity-25 w-full rounded-lg mt-10 mb-6"
            alt="Default Description Image"
          />
        </div>
        <div
          class="z-10 flex flex-col relative w-full max-w-2xl"
          @click="hideEditIcon('desc')"
        >
          <div
            v-if="editIconVisibleDesc"
            @click.stop="hideEditIcon('desc')"
            class="mt-12 absolute left-1/2 -translate-x-1/2 lg:left-auto lg:right-0 lg:translate-x-0 -top-12 lg:-top-14 bg-gray-200 p-2 lg:p-4 rounded-lg shadow-lg w-40 lg:w-56 text-xs lg:text-sm z-50 text-center transition-all"
          >
            <p class="text-gray-800 text-sm text-center">Click to edit</p>
            <div
              class="w-1 h-5 bg-gray-200 absolute top-full left-1/2 -translate-x-1/2 lg:left-auto lg:right-6 lg:translate-x-0 shadow-lg"
            ></div>
          </div>
          <p
            class="mt-14 md:mt-16 text-base sm:text-lg md:text-xl lg:text-2xl font-raleway text-[#1F3571] italic mb-6 sm:mb-8 md:mb-10 break-words px-2 sm:px-0 text-center md:text-right text-wrap md:w-100"
            :style="`color: ${appStore.selectedColor.three};`"
          >
            {{ appStore.questionare.desc }}
          </p>
        </div>
      </div>
    </div>

    <!-- Headline -->
    <div>
      <p class="px-5 text-xl sm:text-2xl py-3 text-center w-full font-extrabold">
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatum aliquid expedita sint!
      </p>

      <!-- First Row of Images -->
      <div class="grid grid-cols-2 sm:grid-cols-4 gap-1 px-2">
        <div
          v-for="(image, index) in images.slice(0, 4)"
          :key="`img-${index}`"
          class="relative cursor-pointer h-48 sm:h-72 w-full"
          @click="hideEditIconAndTriggerFileInput(index)"
        >
          <img :src="image.src" class="object-cover h-full w-full rounded-lg" />
          <span
            v-if="editIconVisible[index]"
            class="absolute top-2 right-2 bg-white p-1 shadow cursor-pointer"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-5 w-5 text-gray-800 cursor-pointer edit"
              viewBox="0 0 20 20"
              fill="currentColor"
            >
              <path
                d="M17.414 2.586a2 2 0 010 2.828l-9 9a2 2 0 01-.707.293l-3.5.875a1 1 0 01-1.211-1.212l.876-3.5a2 2 0 01.293-.707l9-9a2 2 0 012.828 0zM16 5l-1-1-9 9v1h1l9-9z"
              />
            </svg>
          </span>
        </div>
      </div>
      <!-- Second Row of Images -->
      <div class="grid grid-cols-2 sm:grid-cols-4 gap-1 mt-1 px-2">
        <div
          v-for="(image, index) in images.slice(4, 8)"
          :key="`img-${index + 4}`"
          class="relative cursor-pointer h-48 sm:h-72 w-full"
          @click="hideEditIconAndTriggerFileInput(index + 4)"
        >
          <img :src="image.src" class="object-cover h-full w-full rounded-lg" />
          <span
            v-if="editIconVisible[index + 4]"
            class="absolute top-2 right-2 bg-white p-1 shadow cursor-pointer"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-5 w-5 text-gray-800"
              viewBox="0 0 20 20"
              fill="currentColor"
            >
              <path
                d="M17.414 2.586a2 2 0 010 2.828l-9 9a2 2 0 01-.707.293l-3.5.875a1 1 0 01-1.211-1.212l.876-3.5a2 2 0 01.293-.707l9-9a2 2 0 012.828 0zM16 5l-1-1-9 9v1h1l9-9z"
              />
            </svg>
          </span>
        </div>
      </div>
      <input
        type="file"
        ref="fileInput"
        style="display: none"
        @change="handleFileChange"
        accept="image/*"
      />
    </div>

    <!-- Products Section -->
    <section class="container mx-auto px-4 py-16">
      <div class="text-center mb-12">
        <p
          class="m-auto text-[#274EBA] border-b-2 w-max font-raleway text-xs tracking-widest"
          :style="`color: ${appStore.selectedColor.one};`"
        >
          OUR PRICES
        </p>
        <h2
          class="text-2xl sm:text-4xl md:text-5xl font-bold text-[#274EBA] mt-4 font-playfair"
          :style="`color: ${appStore.selectedColor.one};`"
        >
          Our Best Products
        </h2>
      </div>
      <div class="grid grid-cols-3 md:grid-cols-3 gap-8 text-center text-[#274EBA]">
        <div>
          <h3
            class="font-bold font-playfair uppercase"
            :style="`color: ${appStore.selectedColor.one};`"
          >
            Lorem, ipsum.
          </h3>
          <p
            class="font-raleway text-sm text-[#1F3571] italic"
            :style="`color: ${appStore.selectedColor.three};`"
          >
            Lorem ipsum dolor sit.
          </p>
          <p
            class="text-red-600 font-bold font-raleway"
            :style="`color: ${appStore.selectedColor.one};`"
          >
            $4.00
          </p>
        </div>
        <div>
          <h3
            class="font-bold font-playfair uppercase"
            :style="`color: ${appStore.selectedColor.one};`"
          >
            Lorem, ipsum.
          </h3>
          <p
            class="font-raleway text-sm text-[#1F3571] italic"
            :style="`color: ${appStore.selectedColor.three};`"
          >
            Lorem ipsum dolor sit.
          </p>
          <p
            class="text-red-600 font-bold font-raleway"
            :style="`color: ${appStore.selectedColor.one};`"
          >
            $7.00
          </p>
        </div>
        <div>
          <h3
            class="font-bold font-playfair uppercase"
            :style="`color: ${appStore.selectedColor.one};`"
          >
            Lorem, ipsum.
          </h3>
          <p
            class="font-raleway text-sm text-[#1F3571] italic"
            :style="`color: ${appStore.selectedColor.three};`"
          >
            Lorem ipsum dolor sit.
          </p>
          <p
            class="text-red-600 font-bold font-raleway"
            :style="`color: ${appStore.selectedColor.one};`"
          >
            $5.00
          </p>
        </div>
        <div>
          <h3
            class="font-bold font-playfair uppercase"
            :style="`color: ${appStore.selectedColor.one};`"
          >
            Lorem, ipsum.
          </h3>
          <p
            class="font-raleway text-sm text-[#1F3571] italic"
            :style="`color: ${appStore.selectedColor.three};`"
          >
            Lorem ipsum dolor sit.
          </p>
          <p
            class="text-red-600 font-bold font-raleway"
            :style="`color: ${appStore.selectedColor.one};`"
          >
            $9.00
          </p>
        </div>
        <div>
          <h3
            class="font-bold font-playfair uppercase"
            :style="`color: ${appStore.selectedColor.one};`"
          >
            Lorem, ipsum.
          </h3>
          <p
            class="font-raleway text-sm text-[#1F3571] italic"
            :style="`color: ${appStore.selectedColor.three};`"
          >
            Lorem ipsum dolor sit.
          </p>
          <p
            class="text-red-600 font-bold font-raleway"
            :style="`color: ${appStore.selectedColor.one};`"
          >
            $7.00
          </p>
        </div>
        <div>
          <h3
            class="font-bold font-playfair uppercase"
            :style="`color: ${appStore.selectedColor.one};`"
          >
            Lorem, ipsum.
          </h3>
          <p
            class="font-raleway text-sm text-[#1F3571] italic"
            :style="`color: ${appStore.selectedColor.three};`"
          >
            Lorem ipsum dolor sit.
          </p>
          <p
            class="text-red-600 font-bold font-raleway"
            :style="`color: ${appStore.selectedColor.one};`"
          >
            $8.00
          </p>
        </div>
        <div>
          <h3
            class="font-bold font-playfair uppercase"
            :style="`color: ${appStore.selectedColor.one};`"
          >
            Lorem, ipsum.
          </h3>
          <p
            class="font-raleway text-sm text-[#1F3571] italic"
            :style="`color: ${appStore.selectedColor.three};`"
          >
            Lorem ipsum dolor sit.
          </p>
          <p
            class="text-red-600 font-bold font-raleway"
            :style="`color: ${appStore.selectedColor.one};`"
          >
            $21.00
          </p>
        </div>
        <div>
          <h3
            class="font-bold font-playfair uppercase"
            :style="`color: ${appStore.selectedColor.one};`"
          >
            Lorem, ipsum. SALAD
          </h3>
          <p
            class="font-raleway text-sm text-[#1F3571] italic"
            :style="`color: ${appStore.selectedColor.three};`"
          >
            Lorem ipsum dolor sit.
          </p>
          <p
            class="text-red-600 font-bold font-raleway"
            :style="`color: ${appStore.selectedColor.one};`"
          >
            $20.00
          </p>
        </div>
        <div>
          <h3
            class="font-bold font-playfair uppercase"
            :style="`color: ${appStore.selectedColor.one};`"
          >
            Lorem, ipsum.
          </h3>
          <p
            class="font-raleway text-sm text-[#1F3571] italic"
            :style="`color: ${appStore.selectedColor.three};`"
          >
            Lorem ipsum dolor sit.
          </p>
          <p
            class="text-red-600 font-bold font-raleway"
            :style="`color: ${appStore.selectedColor.one};`"
          >
            $19.00
          </p>
        </div>

      </div>
    </section>

    <!-- Footer -->
    <div class="bg-[#333333] text-white flex flex-col justify-center items-center" id="product">
      <div class="grid grid-cols-1 sm:grid-cols-3 text-center w-full max-w-4xl mt-10">
        <div class="mb-6 sm:mb-0">
          <h2 class="text-xl sm:text-2xl font-bold font-playfair">ADDRESS:</h2>
          <p class="mt-4 font-raleway">{{ appStore.questionare.location }}</p>
        </div>
        <div class="mb-6 sm:mb-0">
          <h2 class="text-xl sm:text-2xl font-bold font-playfair">RESERVATION:</h2>
          <p class="mt-4 font-raleway">1-000-111-222</p>
          <p class="font-raleway">contact@example.com</p>
        </div>
        <div>
          <h2 class="text-xl sm:text-2xl font-bold font-playfair">OPEN HOURS:</h2>
          <p class="mt-4 font-raleway">Monday - Friday: 10 AM - 11 PM</p>
          <p class="font-raleway">Saturday - Sunday: 9 AM - 11 PM</p>
        </div>
      </div>
      <div class="flex space-x-4 mt-10">
        <a
          href="#"
          class="flex items-center justify-center h-12 w-12 rounded-full border-2 border-white text-white text-xl"
        ><i class="fab fa-facebook"></i></a>
        <a
          href="#"
          class="flex items-center justify-center h-12 w-12 rounded-full border-2 border-white text-white text-xl"
        ><i class="fab fa-twitter"></i></a>
        <a
          href="#"
          class="flex items-center justify-center h-12 w-12 rounded-full border-2 border-white text-white text-xl"
        ><i class="fab fa-instagram"></i></a>
        <a
          href="#"
          class="flex items-center justify-center h-12 w-12 rounded-full border-2 border-white text-white text-xl"
        ><i class="fab fa-linkedin-in"></i></a>
        <a
          href="#"
          class="flex items-center justify-center h-12 w-12 rounded-full border-2 border-white text-white text-xl"
        ><i class="fab fa-whatsapp"></i></a>
      </div>
      <footer class="mt-auto py-4 text-xs">
        <p class="text-center font-raleway">
          2023 &copy; DESIGNED BY <span class="border-b border-red-500">TechEasy</span>
        </p>
      </footer>
    </div>
  </div>
</template>


<script setup>
import { ref } from 'vue';
import { useAppStore } from "@/Stores/app";

const appStore = useAppStore();

const images = ref([
    { src: "/assets/template-5/1.jpeg" },
    { src: "/assets/template-5/2.jpeg" },
    { src: "/assets/template-5/3.jpeg" },
    { src: "/assets/template-5/4.jpeg" },
    { src: "/assets/template-5/5.jpeg" },
    { src: "/assets/template-5/6.jpeg" },
    { src: "/assets/template-5/7.jpeg" },
    { src: "/assets/template-5/8.jpeg" }
]);

const fileInput = ref(null);
const editIconVisibleName = ref(true);
const editIconVisibleDesc = ref(true);
const editIconVisible = ref([true, true, true, true, true, true, true, true]); // Controls visibility for each image edit icon
const currentImageIndex = ref(0);

function triggerFileInput(index) {
    currentImageIndex.value = index;
    fileInput.value.click();
}

function hideEditIcon(element) {
    if (element === 'name') {
        editIconVisibleName.value = false;
    } else if (element === 'desc') {
        editIconVisibleDesc.value = false;
    }
}

function hideEditIconAndTriggerFileInput(index) {
    editIconVisible.value[index] = false;
    triggerFileInput(index);
}

function handleFileChange(event) {
    const file = event.target.files[0];
    if (file && file.type.startsWith('image')) {
        const reader = new FileReader();

        reader.onload = (e) => {
            images.value[currentImageIndex.value].src = e.target.result; // Update image source
        };

        reader.readAsDataURL(file);
    }
}

</script>
