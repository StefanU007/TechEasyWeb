<template>
  <div class="mb-8 sm:mb-12 md:mb-20">
    <div class="ml-2 sm:ml-4 mt-2 sm:mt-4">
      <img
        src="/assets/svg/logo.svg"
        class="h-16 sm:h-24 md:h-[113px] w-auto max-w-full"
        alt="Logo"
      />
    </div>

    <div class="h-6 sm:h-12 md:h-16 lg:h-20"></div>

    <div class="relative w-full">
      <div
        class="absolute left-0 right-0 -top-8 sm:-top-16 md:-top-24 w-full flex justify-center z-0"
      >
        <img
          src="/assets/svg/dream.svg"
          class="w-full max-w-full h-auto object-cover sm:w-full md:w-full lg:w-full xl:w-full"
          style="min-width: 320px"
          alt="Background Image"
        />
      </div>

      <div class="h-6 sm:h-12 md:h-16 lg:h-20"></div>
    </div>

    <h1
      class="text-2xl sm:text-4xl md:text-5xl lg:text-6xl text-center mt-10 sm:mt-16 md:mt-20 lg:mt-24 px-2"
    >
      Your Website is ready!
    </h1>
    <div
      class="flex flex-col sm:flex-row justify-center items-center w-full px-4 sm:px-0 gap-4 mt-10"
    >
      <Link
        href="/"
        :class="'text-blue-500 h-12 sm:h-16 uppercase flex items-center font-roboto font-bold z-50'"
      >
        Back
      </Link>
      <button
        v-if="!hasOrder && !success && !submitting"
        @click="openModal"
        class="bg-blue-500 uppercase rounded-md text-white w-full sm:w-[255px] font-roboto font-bold hover:shadow-xl hover:shadow-blue-500/50 z-50 h-12 sm:h-16"
      >
          Order Now
      </button>
    </div>

    <div v-html="html" class="mt-10 mx-4 sm:mx-10 md:mx-20 lg:mx-72"></div>
  </div>

  <div
    v-if="showModal"
    class="fixed inset-0 bg-black bg-opacity-60 flex items-center justify-center z-50"
  >
    <div class="bg-white rounded-xl shadow-lg p-8 w-full max-w-md mx-4">
      <h2 class="text-2xl font-bold mb-2 text-center">Just one more step!</h2>
      <p class="mb-6 text-gray-700 text-center">
        Please add your email and we will contact you shortly.
      </p>
      <form @submit.prevent="submitEmail" class="flex flex-col gap-4">
        <div v-if="success" class="text-green-600 font-semibold text-center">
          ✅ Your order has been sent!
        </div>

        <template v-else>
          <input
            v-model="email"
            type="email"
            required
            placeholder="Enter your email"
            class="border rounded-md px-4 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-400"
          />

          <button
            type="submit"
            :disabled="submitting"
            class="bg-blue-500 text-white font-bold rounded-md py-2 hover:bg-blue-600 transition disabled:opacity-50"
          >
            <Spinner v-if="submitting" size="w-6 h-6" textColor="text-white" />
             <span :class="submitting ? 'pl-6' : ''">
                 {{ submitting ? 'Sending...' : 'Submit' }}
            </span>
          </button>

          <p v-if="error" class="text-red-500 text-sm text-center">{{ error }}</p>
        </template>

        <button
          type="button"
          @click="closeModal"
          class="text-gray-500 text-sm mt-2 hover:underline"
        >
          Cancel
        </button>
      </form>
    </div>
  </div>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
import { ref } from "vue";
import axios from "axios";
import Spinner from "@/Components/Spinner.vue";

const props = defineProps({
     html: String,
     hasOrder: Boolean,
     templateUuid: String,
});
const showModal = ref(false);
const email = ref("");
const submitting = ref(false);
const success = ref(false);
const error = ref(null);

function openModal() {
  if (props.hasOrder) return;
  showModal.value = true;
  success.value = false;
  email.value = "";
  error.value = null;
}

function closeModal() {
  showModal.value = false;
}

async function submitEmail() {
  submitting.value = true;
  error.value = null;

  try {
    const response = await axios.post("/orders", {
      email: email.value,
      template_id: props.templateUuid,
    });

    if (response.data.success) {
      success.value = true;
    } else {
      error.value = response.data.message || "Failed to send your order.";
    }
  } catch (e) {
    error.value = e.response?.data?.message || "Unexpected error occurred.";
  } finally {
    submitting.value = false;
  }
}
</script>
