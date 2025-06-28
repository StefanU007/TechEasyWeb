<style>
.background-image {
  background-image: url("/assets/template-10/fgfg-min.jpg");
  background-size: cover;
  background-position: center;
  filter: brightness(80%);
}

.background-image1 {
  background-image: url("/assets/template-10/d.jpg");
  background-size: cover;
  background-position: center;
  filter: brightness(80%);
}

.bg-custom {
  background-color: #fef7e5;
}

.bg {
  background-color: #333333;
}

.background-image::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0, 0, 0, 0.5);
}

.orange-circle {
  background-color: #f97316;
  border-radius: 50%;
  height: 80px;
  width: 80px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.card {
  max-width: 250px;
}
</style>

<!--Bakery Template 3rd page-->
<template>
  <div id="template">
    <div
      contenteditable="true"
      :style="`font-family: ${appStore.fonts[appStore.selectedFont]};`"
    > 
      <header class="bg-white shadow">
        <div
          class="w-full px-2 sm:px-4 py-4 flex flex-col md:flex-row items-center md:justify-between gap-4"
        >
          <img
            v-if="appStore.questionare.logo"
            :src="appStore.questionare.logo"
            class="w-24 h-14 object-scale-down mb-2 md:mb-0 md:ml-6"
            alt="Logo"
          />
          <img
            v-else
            src="/assets/svg/logo.svg"
            class="w-24 h-14 object-scale-down mb-2 md:mb-0 md:ml-6"
            alt="Logo"
          />
          <ul
            class="flex flex-wrap items-center text-[#E2781A] font-bold text-base sm:text-lg md:text-xl"
          >
            <li
              class="mx-2 cursor-pointer hover:text-[#d89255]"
              :style="`color: ${appStore.selectedColor.two};`"
            >
              <a>Our Services</a>
            </li>
            <li
              class="mx-2 cursor-pointer hover:text-[#d89255]"
              :style="`color: ${appStore.selectedColor.two};`"
            >
              <a>Our Mission</a>
            </li>
            <li
              class="mx-2 cursor-pointer hover:text-[#d89255]"
              :style="`color: ${appStore.selectedColor.two};`"
            >
              <a>Bakery Items</a>
            </li>
          </ul>
          <div
            class="flex flex-col justify-center items-center ml-auto md:ml-0 space-y-1"
          >
            <div class="w-6 h-1 bg-gray-800"></div>
            <div class="w-6 h-1 bg-gray-800"></div>
            <div class="w-6 h-1 bg-gray-800"></div>
          </div>
        </div>
      </header>

      <section class="flex flex-col md:flex-row">
        <!-- Image Column -->
        <div
          class="w-full md:w-1/2 bg-[#FEF7E5] flex justify-center items-center"
        >
          <img
            src="/assets/template-10/vb.jpg"
            alt="Breads"
            class="rounded-lg shadow-lg w-full max-w-md md:max-w-full"
          />
        </div>
        <!-- Content Column -->
        <div
          class="w-full md:w-1/2 flex flex-col justify-center p-4 sm:p-8 bg-[#FEF7E5]"
        >
          <p
            class="font-bold mb-6 text-2xl sm:text-4xl md:text-5xl font-raleway break-words text-wrap md:w-[360px]"
            :style="`color: ${appStore.selectedColor.three}; font-family: 'Raleway', sans-serif;`"
          >
            {{ appStore.questionare.name }}
          </p>
          <p
            class="mb-4 text-base sm:text-lg md:text-xl text-black italic font-sans break-words text-wrap md:w-[420px]"
            :style="`color: ${appStore.selectedColor.one}; font-family: 'Open Sans', sans-serif; font-style: italic;`"
          >
            {{ appStore.questionare.desc }}
          </p>
          <p
            class="text-black mb-6 text-sm sm:text-base italic font-sans break-words"
          >
            Image from
            <a
              href="https://www.freepik.com/photos/people"
              target="_blank"
              class="text-black hover:border-b-0 border-b border-black"
              >Freepik</a
            >
          </p>
          <a
            href="#"
            class="self-start bg-[#E2781A] text-white px-8 sm:px-12 tracking-widest py-3 rounded-full text-base sm:text-lg hover:bg-black transition font-sans"
            :style="`color: ${appStore.selectedColor.two}; font-family: 'Open Sans', sans-serif;`"
          >
            READ MORE
          </a>
        </div>
      </section>

      <div class="bg-[#F3DFCA]">
        <!-- Our Services Background -->
        <div class="background-image z-10 py-10 sm:py-16 lg:py-20">
          <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
            <h2
              class="max-w-xl mx-auto text-2xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl font-extrabold text-white text-center font-raleway py-10 sm:py-16 lg:py-20 mb-0 break-words text-wrap"
            >
              Our Services
            </h2>
          </div>
        </div>
        <!-- Floating Cards Grid -->
       <div class="relative z-10 -mt-12 sm:-mt-16 lg:-mt-24 flex justify-center">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 w-full max-w-7xl px-2 sm:px-4 md:px-8 lg:px-16 xl:px-24">
            <div class="bg-white rounded-lg shadow-lg p-6 text-center py-10 w-full h-auto  flex flex-col items-center">
            <div class="mb-4 flex justify-center items-center">
                <div class="bg-orange-500 rounded-full w-20 h-20 sm:w-24 sm:h-24 flex justify-center items-center">
                <img src="/assets/template-10/download.png" alt="Breads" class="h-12 w-12 sm:h-16 sm:w-16" />
                </div>
            </div>
            <h3 class="text-lg sm:text-xl font-semibold text-gray-900 md:w-[100px] break-words text-wrap">Breads</h3>
            <p
                class="mt-2 text-gray-600 text-sm sm:text-base md:w-[160px] break-words text-wrap"
                :style="`color: ${appStore.selectedColor.one}; font-family: 'Open Sans', sans-serif; font-style: italic;`"
            >
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
            </p>
            <a
                href="#"
                class="break-words text-wrap md:w-[100px] mt-4 inline-block text-orange-500 hover:text-orange-600 border-b border-orange-500 hover:border-black text-sm"
            >MORE</a>
            </div>
            <!-- Card 2 -->
            <div
              class="bg-white rounded-lg shadow-lg p-6 text-center py-10 w-full h-auto  flex flex-col items-center"
            >
              <div class="mb-4 flex justify-center items-center">
                <div
                  class="bg-orange-500 rounded-full w-20 h-20 sm:w-24 sm:h-24 flex justify-center items-center"
                >
                  <img
                    src="/assets/template-10/download (1).png"
                    alt="Pastries"
                    class="h-12 w-12 sm:h-16 sm:w-16"
                  />
                </div>
              </div>
              <h3 class="text-lg sm:text-xl font-semibold text-gray-900 md:w-[100px] break-words text-wrap">
                Pastries
              </h3>
              <p
                class="mt-2 text-gray-600 text-sm sm:text-base md:w-[160px] break-words text-wrap"
                :style="`color: ${appStore.selectedColor.one}; font-family: 'Open Sans', sans-serif; font-style: italic;`"
              >
                Excepteur sint occaecat cupidatat non proident, sunt in culpa
                qui officia deserunt
              </p>
              <a
                href="#"
                class="break-words text-wrap md:w-[100px] mt-4 inline-block text-orange-500 hover:text-orange-600 border-b border-orange-500 hover:border-black text-sm"
                >MORE</a
              >
            </div>
            <!-- Card 3 -->
            <div
              class="bg-white rounded-lg shadow-lg p-6 text-center py-10 w-full h-auto  flex flex-col items-center"
            >
              <div class="mb-4 flex justify-center items-center">
                <div
                  class="bg-orange-500 rounded-full w-20 h-20 sm:w-24 sm:h-24 flex justify-center items-center"
                >
                  <img
                    src="/assets/template-10/download (2).png"
                    alt="Cakes"
                    class="h-12 w-12"
                  />
                </div>
              </div>
              <h3 class="text-lg sm:text-xl font-semibold text-gray-900 md:w-[100px] break-words text-wrap">
                Cakes
              </h3>
              <p
                class="mt-2 text-gray-600 text-sm sm:text-base md:w-[160px] break-words text-wrap"
                :style="`color: ${appStore.selectedColor.one}; font-family: 'Open Sans', sans-serif; font-style: italic;`"
              >
                Excepteur sint occaecat cupidatat non proident, sunt in culpa
                qui officia deserunt
              </p>
              <a
                href="#"
                class="break-words text-wrap md:w-[100px] mt-4 inline-block text-orange-500 hover:text-orange-600 border-b border-orange-500 hover:border-black text-sm"
                >MORE</a
              >
            </div>
            <!-- Card 4 -->
            <div
              class="bg-white rounded-lg shadow-lg p-6 text-center py-10 w-full h-auto  flex flex-col items-center"
            >
              <div class="mb-4 flex justify-center items-center">
                <div
                  class="bg-orange-500 rounded-full w-20 h-20 sm:w-24 sm:h-24 flex justify-center items-center"
                >
                  <img
                    src="/assets/template-10/download (3).png"
                    alt="Pizza"
                    class="h-12 w-12"
                  />
                </div>
              </div>
              <h3 class="text-lg sm:text-xl font-semibold text-gray-900 md:w-[100px] break-words text-wrap">
                Pizza
              </h3>
              <p
                class="md:w-[160px] mt-2 text-gray-600 text-sm sm:text-base break-words text-wrap"
                :style="`color: ${appStore.selectedColor.one}; font-family: 'Open Sans', sans-serif; font-style: italic;`"
              >
                Excepteur sint occaecat cupidatat non proident, sunt in culpa
                qui officia deserunt
              </p>
              <a
                href="#"
                class="break-words text-wrap md:w-[100px] mt-4 inline-block text-orange-500 hover:text-orange-600 border-b border-orange-500 hover:border-black text-sm"
                >MORE</a
              >
            </div>
          </div>
        </div>
        <p
          class="text-black mt-8 text-center text-sm sm:text-base italic font-sans"
        >
          Image from
          <a
            class="border-b border-black hover:border-orange-500 hover:cursor-pointer"
            >Freepik</a
          >
        </p>
      </div>
    </div>

    <div class="bg-[#F3DFCA] font-sans flex flex-col items-center">
      <header
        class="flex flex-col lg:flex-row justify-evenly items-center pt-8 sm:pt-12 lg:pt-16 pb-8 gap-8 w-full max-w-7xl mx-auto"
      >
        <img
          v-if="appStore.questionare.image"
          :src="appStore.questionare.image"
          class="rounded-full w-40 h-40 sm:w-72 sm:h-72 lg:w-[400px] lg:h-[400px] xl:w-[500px] xl:h-[500px] object-cover mb-6 lg:mb-0"
          alt="Bakery"
        />
        <div class="flex flex-col items-center lg:items-start w-full max-w-md">
          <h1
            class="font-semibold mb-4 font-raleway text-2xl sm:text-4xl lg:text-5xl xl:text-6xl text-center lg:text-left break-words"
            :style="`color: ${appStore.selectedColor.three};`"
          >
            Loaf Bakery
          </h1>
          <p
            class="text-base sm:text-lg md:text-xl text-left mb-6 w-full"
            :style="`color: ${appStore.selectedColor.one}; font-family: 'Open Sans', sans-serif;`"
          >
            Ultricies leo integer malesuada nunc vel risus commodo viverra
            maecenas. Lobortis elementum nibh tellus molestie nunc non. Aliquet
            bibendum
          </p>
          <button
            class="bg-[#E2781A] hover:bg-black text-white py-2 px-6 sm:px-8 rounded-full shadow-lg tracking-widest text-base sm:text-lg font-semibold w-full max-w-xs"
            :style="`color: ${appStore.selectedColor.two}; font-family: 'Open Sans', sans-serif;`"
          >
            LEARN MORE
          </button>
          <p
            class="text-black mt-5 italic text-center lg:text-left text-sm sm:text-base"
            style="font-family: 'Open Sans', sans-serif"
          >
            Image from
            <a class="border-b border-black hover:cursor-pointer">Freepik</a>
          </p>
        </div>
      </header>

      <div
        class="flex flex-col md:flex-row justify-center items-stretch gap-6 px-2 sm:px-8 -mb-24"
      >
        <div
          class="bg-[#d96704] rounded-2xl shadow-md text-white p-6 sm:p-8 flex-1 max-w-full md:max-w-md lg:max-w-lg text-left text-base sm:text-lg leading-8 font-sans"
          :style="`color: ${appStore.selectedColor.one};`"
        >
          <h2 class="text-2xl sm:text-3xl font-bold mb-2">01</h2>
          <p>
            Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
            cupidatat non proident, sunt in culpa qui officia deserunt mollit
            anim id est laborum. Ut enim ad minim veniam, quis nostrud
            exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat.
          </p>
        </div>
        <div
          class="bg-[#333] rounded-2xl shadow-md text-white p-6 sm:p-8 flex-1 max-w-full md:max-w-md lg:max-w-lg text-left text-base sm:text-lg leading-8 font-sans"
          :style="`color: ${appStore.selectedColor.one};`"
        >
          <h2 class="text-2xl sm:text-3xl font-bold mb-2">02</h2>
          <p>
            Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
            cupidatat non proident, sunt in culpa qui officia deserunt mollit
            anim id est laborum. Ut enim ad minim veniam, quis nostrud
            exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat.
          </p>
        </div>
        <div
          class="bg-[#d96704] rounded-2xl shadow-md text-white p-6 sm:p-8 flex-1 max-w-full md:max-w-md lg:max-w-lg text-left text-base sm:text-lg leading-8 font-sans"
          :style="`color: ${appStore.selectedColor.one};`"
        >
          <h2 class="text-2xl sm:text-3xl font-bold mb-2">03</h2>
          <p>
            Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
            cupidatat non proident, sunt in culpa qui officia deserunt mollit
            anim id est laborum. Ut enim ad minim veniam, quis nostrud
            exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat.
          </p>
        </div>
      </div>
    </div>

    <footer
      class="bg-white py-10 sm:py-16 text-center w-full max-w-3xl mx-auto mt-20 sm:mt-32 px-4"
    >
      <h2
        class="font-semibold mb-4 font-raleway text-2xl sm:text-4xl md:text-5xl lg:text-6xl leading-tight sm:leading-tight"
        :style="`color: ${appStore.selectedColor.three};`"
      >
        Fresh breads, cakes and pastries baked daily
      </h2>
      <p
        class="max-w-2xl mx-auto mb-6 leading-8 text-base sm:text-lg md:text-xl"
        :style="`color: ${appStore.selectedColor.one}; font-family: 'Open Sans', sans-serif;`"
      >
        From wholesome, organic loaves to mouth-watering cakes, there's a
        perfect product for every occasion! We pride ourselves on offering one
        of the widest authentic product ranges from around the world.
      </p>
      <button
        class="bg-[#E2781A] hover:bg-black text-white py-3 sm:py-4 px-8 sm:px-16 rounded-full shadow-lg tracking-widest text-base sm:text-lg"
      >
        LEARN MORE
      </button>
    </footer>

    <div class="bg-black text-white min-h-screen grid place-items-center">
      <div
        class="background-image1 grid grid-cols-1 lg:grid-cols-12 min-h-screen items-center w-full"
      >
        <div
          class="col-span-1 lg:col-start-8 lg:col-span-4 flex justify-end items-center px-4 sm:px-8 md:px-10 w-full"
        >
          <div
            class="bg-white text-black p-6 sm:p-8 rounded-3xl shadow-md mr-0 lg:mr-4 leading-8 w-full max-w-md sm:max-w-lg md:max-w-xl"
          >
            <h2
              class="font-bold mb-4 font-raleway mt-7 text-2xl sm:text-3xl md:text-4xl"
              :style="`color: ${appStore.selectedColor.three};`"
            >
              Our Mission
            </h2>
            <p
              class="mb-4 text-base sm:text-lg"
              :style="`color: ${appStore.selectedColor.one}; font-family: 'Open Sans', sans-serif;`"
            >
              We opened our first bakery in the South End in 2000 with one goal:
              to make the world a sweeter place through warm smiles, gooey
              sticky buns, in voluptate velit esse cillum dolore eu fugiat nulla
              pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <p
              class="text-sm mb-4"
              style="font-family: 'Open Sans', sans-serif"
            >
              Image from
              <a class="border-b border-black hover:cursor-pointer italic"
                >Freepik</a
              >
            </p>
            <button
              class="bg-[#E2781A] text-white py-3 sm:py-4 px-8 sm:px-14 rounded-full tracking-widest hover:bg-black focus:outline-none focus:ring-2 focus:ring-orange-600 mt-5 text-base sm:text-lg"
            >
              VIEW MENU
            </button>
          </div>
        </div>
      </div>
    </div>

    <div class="bg-white flex items-center justify-center min-h-screen mt-20">
      <div class="w-11/12 max-w-7xl mx-auto">
        <h1
          class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-center mb-6 font-raleway mt-5"
          :style="`color: ${appStore.selectedColor.three};`"
        >
          Bakery Items
        </h1>
        <p
          class="text-center mb-3 text-gray-600 italic text-base sm:text-lg"
          :style="`color: ${appStore.selectedColor.one}; font-family: 'Open Sans', sans-serif;`"
        >
          Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
          dolore eu fugiat nulla pariatur.
        </p>
        <p
          class="text-center mb-8 text-gray-600 italic text-base sm:text-lg"
          :style="`color: ${appStore.selectedColor.one}; font-family: 'Open Sans', sans-serif;`"
        >
          Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
          officia deserunt.
        </p>
        <div
          class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10 md:gap-16 lg:gap-20 mt-10 md:mt-16"
        >
          <!-- Card 1 -->
          <div class="text-center">
            <img
              src="/assets/template-10/r.jpg"
              alt="Baguette"
              class="mx-auto rounded-full w-32 h-32 object-cover"
            />
            <h2
              class="mt-4 text-lg sm:text-xl md:text-2xl font-bold font-raleway tracking-widest"
            >
              BAGUETTE
            </h2>
            <p
              class="text-sm sm:text-base text-gray-700 my-3 italic"
              :style="`color: ${appStore.selectedColor.one}; font-family: 'Open Sans', sans-serif;`"
            >
              Small-batch sourdough baguette.
            </p>
            <p
              class="mt-2 font-bold text-[#E2781A] text-xl sm:text-2xl"
              :style="`color: ${appStore.selectedColor.two}; font-family: 'Open Sans', sans-serif;`"
            >
              $4.5
            </p>
          </div>
          <!-- Card 2 -->
          <div class="text-center">
            <img
              src="/assets/template-10/rr.jpg"
              alt="Farming Bread"
              class="mx-auto rounded-full w-32 h-32 object-cover"
            />
            <h2
              class="mt-4 text-lg sm:text-xl md:text-2xl font-bold font-raleway tracking-widest"
            >
              FARMING BREAD
            </h2>
            <p
              class="text-sm sm:text-base text-gray-700 my-3 italic"
              :style="`color: ${appStore.selectedColor.one}; font-family: 'Open Sans', sans-serif;`"
            >
              Sample text. Click to select the Text Element.
            </p>
            <p
              class="mt-2 font-bold text-[#E2781A] text-xl sm:text-2xl"
              :style="`color: ${appStore.selectedColor.two}; font-family: 'Open Sans', sans-serif;`"
            >
              $5.25
            </p>
          </div>
          <!-- Card 3 -->
          <div class="text-center">
            <img
              src="/assets/template-10/hh.jpg"
              alt="Mixed Grain"
              class="mx-auto rounded-full w-32 h-32 object-cover"
            />
            <h2
              class="mt-4 text-lg sm:text-xl md:text-2xl font-bold font-raleway tracking-widest"
            >
              MIXED GRAIN
            </h2>
            <p
              class="text-sm sm:text-base text-gray-700 my-3 italic"
              :style="`color: ${appStore.selectedColor.one}; font-family: 'Open Sans', sans-serif;`"
            >
              Sample text. Click to select the Text Element.
            </p>
            <p
              class="mt-2 font-bold text-[#E2781A] text-xl sm:text-2xl"
              :style="`color: ${appStore.selectedColor.two}; font-family: 'Open Sans', sans-serif;`"
            >
              $4.5
            </p>
          </div>
          <!-- Card 4 -->
          <div class="text-center">
            <img
              src="/assets/template-10/hg.jpg"
              alt="Milk Bread"
              class="mx-auto rounded-full w-32 h-32 object-cover"
            />
            <h2
              class="mt-4 text-lg sm:text-xl md:text-2xl font-bold font-raleway tracking-widest"
            >
              MILK BREAD
            </h2>
            <p
              class="text-sm sm:text-base text-gray-700 my-3 italic"
              :style="`color: ${appStore.selectedColor.one}; font-family: 'Open Sans', sans-serif;`"
            >
              Sample text. Click to select the Text Element.
            </p>
            <p
              class="mt-2 font-bold text-[#E2781A] text-xl sm:text-2xl"
              :style="`color: ${appStore.selectedColor.two}; font-family: 'Open Sans', sans-serif;`"
            >
              $3.55
            </p>
          </div>
          <!-- Card 5 -->
          <div class="text-center">
            <img
              src="/assets/template-10/jhjhjh.jpg"
              alt="Brown Bread"
              class="mx-auto rounded-full w-32 h-32 object-cover"
            />
            <h2
              class="mt-4 text-lg sm:text-xl md:text-2xl font-bold font-raleway tracking-widest"
            >
              BROWN BREAD
            </h2>
            <p
              class="text-sm sm:text-base text-gray-700 my-3 italic"
              :style="`color: ${appStore.selectedColor.one}; font-family: 'Open Sans', sans-serif;`"
            >
              Sample text. Click to select the Text Element.
            </p>
            <p
              class="mt-2 font-bold text-[#E2781A] text-xl sm:text-2xl"
              :style="`color: ${appStore.selectedColor.two}; font-family: 'Open Sans', sans-serif;`"
            >
              $2.45
            </p>
          </div>
          <!-- Card 6 -->
          <div class="text-center">
            <img
              src="/assets/template-10/j.jpg"
              alt="Cheese Bread"
              class="mx-auto rounded-full w-32 h-32 object-cover"
            />
            <h2
              class="mt-4 text-lg sm:text-xl md:text-2xl font-bold font-raleway tracking-widest"
            >
              CHEESE BREAD
            </h2>
            <p
              class="text-sm sm:text-base text-gray-700 my-3 italic"
              :style="`color: ${appStore.selectedColor.one}; font-family: 'Open Sans', sans-serif;`"
            >
              Sample text. Click to select the Text Element.
            </p>
            <p
              class="mt-2 font-bold text-[#E2781A] text-xl sm:text-2xl"
              :style="`color: ${appStore.selectedColor.two}; font-family: 'Open Sans', sans-serif;`"
            >
              $5.5
            </p>
          </div>
          <!-- Card 7 -->
          <div class="text-center">
            <img
              src="/assets/template-10/ghghe4.jpg"
              alt="Croissant"
              class="mx-auto rounded-full w-32 h-32 object-cover"
            />
            <h2
              class="mt-4 text-lg sm:text-xl md:text-2xl font-bold font-raleway tracking-widest"
            >
              CROISSANT
            </h2>
            <p
              class="text-sm sm:text-base text-gray-700 my-3 italic"
              :style="`color: ${appStore.selectedColor.one}; font-family: 'Open Sans', sans-serif;`"
            >
              Sample text. Click to select the Text Element.
            </p>
            <p
              class="mt-2 font-bold text-[#E2781A] text-xl sm:text-2xl"
              :style="`color: ${appStore.selectedColor.two}; font-family: 'Open Sans', sans-serif;`"
            >
              $1.8
            </p>
          </div>
          <!-- Card 8 -->
          <div class="text-center">
            <img
              src="/assets/template-10/rtrtrt.jpg"
              alt="Cinnabon"
              class="mx-auto rounded-full w-32 h-32 object-cover"
            />
            <h2
              class="mt-4 text-lg sm:text-xl md:text-2xl font-bold font-raleway tracking-widest"
            >
              CINNABON
            </h2>
            <p
              class="text-sm sm:text-base text-gray-700 my-3 italic"
              :style="`color: ${appStore.selectedColor.one}; font-family: 'Open Sans', sans-serif;`"
            >
              Sample text. Click to select the Text Element.
            </p>
            <p
              class="mt-2 font-bold text-[#E2781A] text-xl sm:text-2xl"
              :style="`color: ${appStore.selectedColor.two}; font-family: 'Open Sans', sans-serif;`"
            >
              $1.5
            </p>
          </div>
        </div>
      </div>
    </div>

    <div>
      <div class="min-h-screen grid grid-cols-1 md:grid-cols-2">
        <!-- Left Column with Custom Background Color -->
        <div
          class="bg-custom flex flex-col justify-center items-center text-center px-4 py-8"
        >
          <h1
            class="font-bold mb-4 font-raleway text-2xl sm:text-4xl md:text-5xl lg:text-6xl"
            :style="`color: ${appStore.selectedColor.three};`"
          >
            Visit Us
          </h1>
          <p
            class="text-base sm:text-lg mb-4 break-words max-w-xs sm:max-w-sm md:max-w-md"
          >
            {{ appStore.questionare.location }}
          </p>
          <div class="mb-4">
            <h2
              class="text-xl sm:text-2xl font-semibold mb-2 font-raleway text-[#E2781A]"
              :style="`color: ${appStore.selectedColor.two};`"
            >
              HOURS
            </h2>
            <p class="max-w-xs mx-auto">Monday – Saturday: 9am – 7pm</p>
            <p class="my-5">Sunday: 10am – 6pm</p>
          </div>
          <div class="mb-4">
            <h2
              class="text-xl sm:text-2xl font-semibold mb-2 font-raleway text-[#E2781A]"
              :style="`color: ${appStore.selectedColor.two};`"
            >
              PHONE
            </h2>
            <p>1 (234) 567-891</p>
          </div>
          <p
            class="mb-4 italic text-sm sm:text-base"
            style="font-family: 'Open Sans', sans-serif"
          >
            Image from
            <a
              class="border-b border-black hover:cursor-pointer italic hover:text-[#E2781A] hover:border-[#E2781A]"
              >Freepik</a
            >
          </p>
        </div>

        <!-- Right Column with Image -->
        <div class="relative min-h-[300px] md:min-h-0">
          <img
            src="/assets/template-10/s-min.jpg"
            alt="Baking ingredients"
            class="w-full h-full object-cover min-h-[300px] md:min-h-0"
          />
        </div>
      </div>

      <!-- Footer -->
      <footer class="bg-black text-white text-center">
        <p class="text-sm py-9" style="font-family: 'Open Sans', sans-serif">
          Sample text. Click to select the Text Element.
        </p>
      </footer>
      <footer class="bg text-white text-center py-4">
        <p class="text-sm py-3">
          <span
            class="underline hover:no-underline"
            style="font-family: 'Open Sans', sans-serif; color: #c79c78"
          >
            Website Template
          </span>
          created with
          <a
            href="https://www.bestfreewebsitebuilder.com"
            style="color: #c79c78"
            class="underline hover:no-underline"
            >Best Free Website Builder</a
          >.
        </p>
      </footer>
    </div>
  </div>
</template>





<script setup>
import { useAppStore } from "@/Stores/app";
import ColorPicker from "../ColorPicker.vue";

const appStore = useAppStore();
</script>
