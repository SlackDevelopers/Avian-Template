<script setup lang="ts">
import { ref } from "vue";

import PasswordInput from "@src/components/ui/inputs/PasswordInput.vue";
import Button from "@src/components/ui/inputs/Button.vue";

const password = ref("");
const confirmPassword = ref("");
</script>

<template>
  <div class="password-section">
    <div class="form-fields">
      <!--form-->
      <PasswordInput
        @valueChanged="(value) => (password = value)"
        :value="password"
        label="Password"
        placeholder="Enter your password"
        class="form-input"
      />

      <PasswordInput
        @valueChanged="(value) => (confirmPassword = value)"
        :value="confirmPassword"
        label="Confirm Password"
        placeholder="Enter your password"
      />
    </div>

    <!--controls-->
    <div class="form-actions">
      <Button class="contained-primary contained-text signup-button"
        >Sign up</Button
      >
      <Button
        class="outlined-primary outlined-text back-button"
        @click="
          $emit('active-section-change', {
            sectionName: 'personal-section',
            animationName: 'slide-right',
          })
        "
      >
        Back
      </Button>
    </div>
  </div>
</template>

<style scoped>
.password-section {
  width: 100%;
}

.form-fields {
  margin-bottom: var(--space-lg);
}

.form-input {
  margin-bottom: var(--space-md);
}

.form-actions {
  margin-bottom: var(--space-lg);
}

.signup-button, .back-button {
  width: 100%;
  margin-bottom: var(--space-md);
}
</style>