<script setup lang="ts">
import { computed } from "vue";

const props = defineProps<{
  handleClick?: () => void;
  label?: string;
  variant?: 'primary' | 'danger';
}>();
</script>

<template>
  <button
    :aria-label="props.label"
    @click.prevent="props.handleClick"
    role="menuitem"
    class="dropdown-link"
    :class="[variant ? `dropdown-link-${variant}` : 'dropdown-link-primary']"
  >
    <slot></slot>
  </button>
</template>

<style scoped>
.dropdown-link {
  width: 100%;
  padding: 0.75rem 1rem;
  display: flex;
  align-items: center;
  border-bottom: 1px solid var(--border-default);
  opacity: 0.8;
  outline: none;
  font-size: 0.875rem;
  transition: all var(--t-fast);
}

.dropdown-link-primary {
  color: var(--text-primary);
}

.dropdown-link-primary:hover {
  background-color: var(--background-default-hover);
}

.dropdown-link-danger {
  color: var(--danger);
}

.dropdown-link-danger:hover {
  background-color: var(--background-default-hover);
}
</style>
