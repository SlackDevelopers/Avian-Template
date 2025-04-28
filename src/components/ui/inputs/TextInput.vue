<script setup lang="ts">
const emit = defineEmits(["valueChanged"]);

const props = defineProps<{
  id?: string;
  type?: string;
  value?: string;
  name?: string;
  placeholder?: string;
  bordered?: boolean;
}>();

const handleInput = (event: any) => {
  emit("valueChanged", (event.target as HTMLInputElement).value);
};
</script>

<template>
  <input
    :type="props.type || 'text'"
    name="props.name"
    :id="props.id"
    class="avian-input"
    :class="[props.bordered ? 'bordered' : 'ringed']"
    @input="handleInput"
    :value="props.value"
    :placeholder="props.placeholder"
  />
</template>

<style scoped>
.avian-input {
  width: 100%;
  max-width: 100%;
  height: 42px;
  padding: 0.75rem 1rem;
  border-radius: var(--radius-app);
  outline: none;
  font-size: 0.875rem;
  color: var(--text-primary);
  transition: all 0.2s ease-out;
}

.avian-input::placeholder {
  color: var(--input-placeholder);
}

.avian-input.bordered {
  border: 1px solid var(--border-default);
  background-color: var(--background-default);
}

.avian-input.bordered:focus {
  border-color: var(--input-border-active);
  background-color: var(--compose-input-background-focused);
}

.avian-input.ringed {
  border: none;
  background-color: var(--panel-input-background);
}

.avian-input.ringed:focus {
  box-shadow: 0 0 0 2px var(--focus-lighter);
  background-color: var(--compose-input-background-focused);
}
</style>
