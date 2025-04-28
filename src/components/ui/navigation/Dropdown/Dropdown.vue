<script setup lang="ts">
import { onMounted, onUnmounted } from "vue";

import ScaleTransition from "@src/components/ui/transitions/ScaleTransition.vue";

const props = defineProps<{
  show: boolean;
  handleClickOutside: any;
  preventClickOutside?: boolean;
  coordinates?: {
    left?: string;
    right?: string;
    top?: string;
    bottom?: string;
  };
  position: string[];
  closeDropdown: () => void;
}>();

// (event) close dropdown when typing esc button.
const handleCloseOnEscape = (event: KeyboardEvent) => {
  if (["Escape", "Esc"].includes(event.key)) {
    props.closeDropdown();
  }
};

onMounted(() => {
  // set the handleCloseOnEscape when mounting the component.
  document.addEventListener("keydown", handleCloseOnEscape);
});

onUnmounted(() => {
  // remove handleCloseOnEscape when unmounting the component.
  document.removeEventListener("keydown", handleCloseOnEscape);
});
</script>

<template>
  <div>
    <div
      v-if="props.show"
      class="dropdown-backdrop"
    ></div>

    <ScaleTransition>
      <div
        :class="props.position"
        :style="props.coordinates"
        v-show="props.show"
        v-click-outside="props.handleClickOutside"
        class="dropdown-menu"
        role="menu"
        aria-orientation="vertical"
        aria-labelledby="menu-button"
        tabindex="-1"
      >
        <div role="none">
          <slot></slot>
        </div>
      </div>
    </ScaleTransition>
  </div>
</template>

<style scoped>
.dropdown-backdrop {
  position: fixed;
  left: 0;
  top: 0;
  z-index: 50;
  width: 100%;
  height: 100%;
}

.dropdown-menu {
  position: absolute;
  z-index: 100;
  width: 12.5rem;
  margin-top: 0.5rem;
  border-radius: var(--radius-app);
  background-color: var(--background-default);
  box-shadow: 0 0.25rem 0.5rem rgba(var(--shadow-rgb), 0.12);
  border: 1px solid var(--border-default);
  outline: none;
}
</style>
