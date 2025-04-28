<script setup lang="ts">
import { ref } from "vue";

import Button from "@src/components/ui/inputs/Button.vue";
import PasswordInput from "@src/components/ui/inputs/PasswordInput.vue";

const oldPassword = ref("");
const newPassword = ref("");
const confirmNewPassword = ref("");
</script>

<template>
  <div class="reset-form">
    <div class="reset-form-container">
      <!--header-->
      <div class="reset-header">
        <img
          src="@src/assets/vectors/logo-gradient.svg"
          class="reset-logo"
          alt="bird logo"
        />
        <p class="reset-title">Reset Your Password</p>
        <p class="reset-subtitle">
          Enter your old password and your new password below to reset your
          password
        </p>
      </div>

      <!--form-->
      <div class="reset-form-fields">
        <PasswordInput
          :value="oldPassword"
          @valueChanged="
            (value) => {
              oldPassword = value;
            }
          "
          bordered
          label="Old Password"
          placeholder="Enter your password"
          class="reset-form-input"
        />

        <PasswordInput
          :value="newPassword"
          @valueChanged="
            (value) => {
              newPassword = value;
            }
          "
          bordered
          label="New Password"
          placeholder="Enter your password"
          class="reset-form-input"
        />

        <PasswordInput
          :value="confirmNewPassword"
          @valueChanged="
            (value) => {
              confirmNewPassword = value;
            }
          "
          bordered
          label="Confirm New Password"
          placeholder="Enter your password"
        />
      </div>

      <!--controls-->
      <div class="reset-form-actions">
        <Button class="contained-primary contained-text reset-button" link to="/"
          >Reset Password</Button
        >
      </div>
    </div>
  </div>
</template>

<style scoped>
.reset-form {
  width: 100%;
  padding: var(--space-lg);
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

.reset-form-container {
  margin-bottom: var(--space-xl);
  width: 21.875rem;
}

.reset-header {
  margin-bottom: var(--space-xl);
  display: flex;
  flex-direction: column;
}

.reset-logo {
  width: 1.375rem;
  height: 1.125rem;
  margin-bottom: var(--space-md);
  opacity: 0.7;
}

.reset-title {
  font-size: var(--text-heading-md);
  font-weight: 600;
  color: var(--text-primary);
  margin-bottom: var(--space-md);
}

.reset-subtitle {
  font-size: var(--text-body-sm);
  color: var(--text-secondary);
  font-weight: 300;
}

.reset-form-fields {
  margin-bottom: var(--space-xl);
}

.reset-form-input {
  margin-bottom: var(--space-lg);
}

.reset-button {
  width: 100%;
}
</style>