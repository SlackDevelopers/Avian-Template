<script setup lang="ts">
import { ref } from "vue";

import Button from "@src/components/ui/inputs/Button.vue";
import LabeledTextInput from "@src/components/ui/inputs/LabeledTextInput.vue";
import PasswordInput from "@src/components/ui/inputs/PasswordInput.vue";
import { RouterLink } from "vue-router";

const password = ref("");
</script>

<template>
  <div class="login-form">
    <div class="login-form-container">
      <!--header-->
      <div class="login-header">
        <img
          src="@src/assets/vectors/logo-gradient.svg"
          class="login-logo"
          alt="bird logo"
        />
        <p class="login-title">Welcome back</p>
        <p class="login-subtitle">
          Create an account a start messaging now!
        </p>
      </div>

      <!--form-->
      <div class="login-form-fields">
        <LabeledTextInput
          label="Email"
          placeholder="Enter your email"
          class="login-input"
        />
        <PasswordInput
          @value-changed="
            (value) => {
              password = value;
            }
          "
          :value="password"
          label="Password"
          placeholder="Enter your password"
        />
      </div>

      <!--local controls-->
      <div class="login-actions">
        <Button
          class="contained-primary contained-text login-button"
          link
          to="/chat/no-chat/"
          >Sign in</Button
        >
      </div>

      <!--divider-->
      <div class="login-divider">
        <span class="divider-line"></span>
        <p class="divider-text">or</p>
        <span class="divider-line"></span>
      </div>

      <!--oauth controls-->
      <div class="login-oauth">
        <Button class="outlined-primary outlined-text login-button">
          <span class="oauth-button-content">
            <img
              src="@src/assets/vectors/google-logo.svg"
              class="oauth-logo"
              alt="google logo"
            />
            Sign in with google
          </span>
        </Button>

        <!--bottom text-->
        <div class="login-footer">
          <p class="footer-text">
            Don't have an account?
            <RouterLink
              to="/access/sign-up/"
              class="footer-link"
            >
              Sign up
            </RouterLink>
          </p>
        </div>
      </div>
    </div>
  </div>
</template>

<style scoped>
.login-form {
  padding: var(--space-lg);
  flex-basis: 100%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

@media (min-width: 768px) {
  .login-form {
    flex-basis: 50%;
  }
}

.login-form-container {
  width: 100%;
  padding: 0 10%;
}

@media (min-width: 768px) {
  .login-form-container {
    padding: 0 26%;
  }
}

.login-header {
  margin-bottom: var(--space-xl);
  display: flex;
  flex-direction: column;
}

.login-logo {
  width: 1.375rem;
  height: 1.125rem;
  margin-bottom: var(--space-md);
  opacity: 0.7;
}

.login-title {
  font-size: var(--text-heading-md);
  font-weight: 600;
  color: var(--text-primary);
  margin-bottom: var(--space-md);
}

.login-subtitle {
  font-size: var(--text-body-sm);
  color: var(--text-secondary);
  font-weight: 300;
}

.login-form-fields {
  margin-bottom: var(--space-xl);
}

.login-input {
  margin-bottom: var(--space-lg);
}

.login-actions {
  margin-bottom: var(--space-xl);
}

.login-button {
  width: 100%;
  margin-bottom: var(--space-md);
}

.login-divider {
  margin-bottom: var(--space-xl);
  display: flex;
  align-items: center;
}

.divider-line {
  width: 100%;
  border: 1px dashed var(--border-subtle);
  border-radius: 0.0625rem;
}

.divider-text {
  font-size: var(--text-body-sm);
  color: var(--text-secondary);
  padding: 0 var(--space-md);
  font-weight: 300;
}

.oauth-button-content {
  display: flex;
  align-items: center;
}

.oauth-logo {
  margin-right: var(--space-sm);
}

.login-footer {
  display: flex;
  justify-content: center;
}

.footer-text {
  font-size: var(--text-body-md);
  color: var(--text-primary);
}

.footer-link {
  color: var(--accent-primary);
  opacity: 1;
}
</style>