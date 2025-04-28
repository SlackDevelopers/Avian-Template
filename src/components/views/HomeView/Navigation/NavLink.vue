<script setup lang="ts">
import type { Component } from "vue";

const props = defineProps<{
  icon: Component;
  title: string;
  notifications?: number;
  active?: boolean;
}>();
</script>

<template>
  <div class="nav-link-container">
    <button
      class="nav-link-button"
      :title="props.title"
      :aria-label="
        props.notifications
          ? props.title + ' ' + props.notifications + ' new notifications'
          : props.title
      "
    >
      <!--icon-->
      <component
        :is="props.icon"
        class="nav-icon"
        :class="{'nav-icon-active': props.active}"
      />

      <!--notification pill-->
      <div
        v-if="props.notifications"
        class="notification-badge"
      >
        {{ props.notifications }}
      </div>
    </button>
  </div>
</template>

<style scoped>
.nav-link-container {
  margin-bottom: 0;
}

.nav-link-button {
  position: relative;
  outline: none;
}

.nav-icon {
  width: 1.75rem;
  height: 1.5rem;
  color: var(--icon-lighter);
  transition: all var(--t-fast);
}

.nav-icon:hover {
  color: var(--icon-primary);
}

.nav-icon:active {
  color: var(--icon-primary);
  transform: scale(1.1);
}

.nav-icon-active {
  color: var(--icon-primary);
}

.notification-badge {
  position: absolute;
  right: 0;
  top: 0.75rem;
  width: 1.25rem;
  height: 1.25rem;
  display: flex;
  align-items: center;
  justify-content: center;
  outline: none;
  background-color: var(--button-primary-background);
  color: var(--button-primary);
  border: 1px solid var(--background-default);
  border-radius: 9999px;
  font-size: 0.75rem;
  transition: all var(--t-normal);
}

/* Media queries for desktop */
@media (min-width: 60.5rem) {
  .nav-link-container {
    margin-bottom: 1.5rem;
  }
}
</style>
