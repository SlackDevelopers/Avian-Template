<script setup lang="ts">
import useStore from "@src/store/store";

const store = useStore();
</script>

<template>
  <div
    :class="{ dark: store.settings.darkMode, light: !store.settings.darkMode }"
    class="scrollbox"
    tabindex="0"
  >
    <div class="scrollbox-content">
      <slot />
    </div>
  </div>
</template>

<style scoped>
.scrollbox {
  overflow: auto;
  visibility: hidden;
}

.scrollbox-content,
.scrollbox:hover,
.scrollbox:focus {
  visibility: visible;
}

.scrollbox::-webkit-scrollbar {
  width: var(--scrollbar-width);
  height: var(--scrollbar-width);
}

.scrollbox::-webkit-scrollbar-track {
  border-radius: 100vh;
  background: transparent;
}

.scrollbox.light::-webkit-scrollbar-thumb {
  background-color: var(--secondary-light);
  border-radius: 100vh;
  border: 0;
  cursor: default;
}

.scrollbox.dark::-webkit-scrollbar-thumb {
  background-color: var(--background-default-active);
  border-radius: 100vh;
  border: 0;
  cursor: default;
}
</style>
