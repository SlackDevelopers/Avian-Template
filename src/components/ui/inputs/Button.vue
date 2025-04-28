<script setup lang="ts">
import { RouterLink } from "vue-router";

const props = defineProps<{
  loading?: boolean;
  link?: boolean;
  typography?: string;
  variant?: 'primary' | 'success' | 'danger';
}>();
</script>

<template>
  <component
    :is="link ? RouterLink : 'button'"
    @click="$emit('button-clicked', $event)"
    tabindex="0"
    class="avian-button"
    :class="variant || 'primary'"
  >
    <!--loading icon-->
    <svg
      v-if="props.loading"
      :class="{ 'animate-spin': props.loading }"
      class="-ml-1 mr-3 h-5 w-5 text-white"
      xmlns="http://www.w3.org/2000/svg"
      fill="none"
      viewBox="0 0 24 24"
    >
      <circle
        class="opacity-25"
        cx="12"
        cy="12"
        r="10"
        stroke="currentColor"
        stroke-width="4"
      ></circle>
      <path
        class="opacity-75"
        fill="currentColor"
        d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 01412H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"
      ></path>
    </svg>

    <!--loading text-->
    <template v-if="props.loading"> Processing </template>

    <!--text-->
    <template v-else>
      <slot></slot>
    </template>
  </component>
</template>

<style scoped>
.avian-button {
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 0.75rem 1rem;
  border-radius: var(--radius-app);
  font-weight: 500;
  outline: none;
  transition: all 0.2s ease-out;
  cursor: pointer;
  min-height: 44px;
}

.avian-button.primary {
  background-color: var(--button-primary-background);
  color: var(--button-primary);
}

.avian-button.primary:hover {
  background-color: var(--button-primary-background-hover);
}

.avian-button.success {
  background-color: var(--button-approve-background);
  color: var(--button-approve);
}

.avian-button.success:hover {
  background-color: var(--button-approve-background-hover);
}

.avian-button.danger {
  background-color: var(--button-primary-destructive-background);
  color: var(--button-primary-destructive-color);
}

.avian-button.danger:hover {
  background-color: var(--button-primary-destructive-background-hover);
}
</style>
