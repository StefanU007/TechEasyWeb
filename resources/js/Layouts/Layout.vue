<template>
  <div class="layout-wrapper">
    <div class="main-content">
      <slot />
    </div>
    
  </div>
</template>

<script setup>

</script>

<style scoped>
.layout-wrapper {
  display: flex;
  width: 100vw;
  height: 100vh;
  overflow: hidden;
}

.main-content {
  flex: 1 1 0%;
  min-width: 0;
  overflow-y: auto; /* Allow scrolling if content overflows */
}

.sidebar {
  width: 320px; /* Match picker width */
  flex-shrink: 0;
  overflow-y: auto; /* Scrollable if content is long */
}
</style>
