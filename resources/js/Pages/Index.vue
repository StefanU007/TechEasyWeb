<template>
    <component :is="pages[appStore.currentPage]" />
</template>

<script setup>
import { useAppStore } from "@/Stores/app";

import ChooseYourTemplate from "@/Components/ChooseYourTemplate.vue";
import Questionare from "@/Components/Questionare.vue";
import EditTemplate from "@/Components/EditTemplate.vue";

const pages = {
    ChooseYourTemplate,
    Questionare,
    EditTemplate,
};

const appStore = useAppStore();
</script>
