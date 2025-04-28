<script setup lang="ts">
import { ref } from "vue";
import useStore from "@src/store/store";
import { ForwardIcon } from "@heroicons/vue/24/outline";

let SkipLinkFocused = ref(false);

const store = useStore();
</script>

<template>
  <div class="logo-container">
    <a
      href="#mainContent"
      title="Skip to main content"
      @blur="SkipLinkFocused = false"
      @focus="SkipLinkFocused = true"
      class="skip-link"
      :class="{'skip-link-hidden': !SkipLinkFocused}"
    >
      <ForwardIcon class="skip-icon" />
    </a>

    <button
      aria-label="avian logo"
      :class="{ hidden: SkipLinkFocused }"
      class="logo-button"
    >
      <img
        v-if="!store.settings.darkMode"
        src="@src/assets//vectors/logo.svg"
        class="logo-image"
        alt="gray bird logo"
      />
      <img
        v-else
        src="@src/assets/vectors/logo-white.svg"
        class="logo-image logo-image-dark"
        alt="white bird logo"
      />
    </button>
  </div>
</template>

<style scoped>
.logo-container {
  margin-bottom: 1.75rem;
  height: 1.75rem;
  display: none;
}

.skip-link {
  outline: none;
}

.skip-link-hidden {
  position: absolute;
  right: 625rem;
}

.skip-icon {
  width: 1.75rem;
  height: 1.5rem;
  color: var(--icon-primary);
}

.logo-button {
  outline: none;
}

.logo-image {
  width: 2rem;
  height: 1.75rem;
}

.logo-image-dark {
  opacity: 0.4;
}

/* Media queries for desktop */
@media (min-width: 60.5rem) {
  .logo-container {
    display: block;
  }
}
</style>
