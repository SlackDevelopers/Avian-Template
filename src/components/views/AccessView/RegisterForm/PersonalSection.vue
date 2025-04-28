<script setup lang="ts">
import Button from "@src/components/ui/inputs/Button.vue";
import LabeledTextInput from "@src/components/ui/inputs/LabeledTextInput.vue";
</script>

<template>
  <div class="personal-section">
    <!--form-->
    <div class="form-fields">
      <LabeledTextInput
        label="Email"
        placeholder="Enter your email"
        class="form-input"
      />
      <LabeledTextInput
        label="First Name"
        placeholder="Enter your first name"
        class="form-input"
      />
      <LabeledTextInput
        label="Last Name"
        placeholder="Enter your last name"
        class="form-input"
      />
    </div>

    <!--local controls-->
    <div class="form-actions">
      <Button
        class="contained-primary contained-text next-button"
        @click="
          $emit('active-section-change', {
            sectionName: 'password-section',
            animationName: 'slide-left',
          })
        "
        >Next</Button
      >
    </div>

    <!--divider-->
    <div class="form-divider">
      <span class="divider-line"></span>
      <p class="divider-text">or</p>
      <span class="divider-line"></span>
    </div>

    <!--oauth controls-->
    <Button class="outlined-primary outlined-text oauth-button">
      <span class="oauth-button-content">
        <img
          src="@src/assets/vectors/google-logo.svg"
          class="oauth-logo"
          alt="google-logo"
        />
        Sign in with google
      </span>
    </Button>
  </div>
</template>

<style scoped>
.personal-section {
  width: 100%;
}

.form-fields {
  margin-bottom: var(--space-lg);
}

.form-input {
  margin-bottom: var(--space-lg);
}

.form-actions {
  margin-bottom: var(--space-xl);
}

.next-button, .oauth-button {
  width: 100%;
  margin-bottom: var(--space-md);
}

.form-divider {
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
</style>