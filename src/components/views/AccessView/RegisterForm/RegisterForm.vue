<script setup lang="ts">
import { computed, ref } from "vue";

import SlideTransition from "@src/components/ui/transitions/SlideTransition.vue";
import PasswordSection from "@src/components/views/AccessView/RegisterForm/PasswordSection.vue";
import PersonalSection from "@src/components/views/AccessView/RegisterForm/PersonalSection.vue";
import { RouterLink } from "vue-router";

defineEmits(["activeSectionChange"]);

// determines what form section to use.
const activeSectionName = ref("personal-section");

// determines what direction the slide animation should use.
const animation = ref("slide-left");

// get the active section component from the section name
const ActiveSection = computed((): any => {
  if (activeSectionName.value === "personal-section") {
    return PersonalSection;
  } else if (activeSectionName.value === "password-section") {
    return PasswordSection;
  }
});

// (event) to move between modal pages
const changeActiveSection = (event: {
  sectionName: string;
  animationName: string;
}) => {
  animation.value = event.animationName;
  activeSectionName.value = event.sectionName;
};
</script>

<template>
  <div class="register-form">
    <div class="register-form-container">
      <!--header-->
      <div class="register-header">
        <img
          src="@src/assets/vectors/logo-gradient.svg"
          class="register-logo"
          alt="bird logo"
        />
        <p class="register-title">Get started with Avian</p>
        <p class="register-subtitle">
          Sign in to start using messaging!
        </p>
      </div>

      <!--form section-->
      <SlideTransition :animation="animation">
        <component
          @active-section-change="changeActiveSection"
          :is="ActiveSection"
        />
      </SlideTransition>

      <!--bottom text-->
      <div class="register-footer">
        <p class="footer-text">
          Already have an account?
          <RouterLink to="/access/sign-in/" class="footer-link">
            Sign in
          </RouterLink>
        </p>
      </div>
    </div>
  </div>
</template>

<style scoped>
.register-form {
  padding: var(--space-lg);
  flex-basis: 100%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

@media (min-width: 768px) {
  .register-form {
    flex-basis: 50%;
  }
}

.register-form-container {
  width: 100%;
  padding: 0 10%;
}

@media (min-width: 768px) {
  .register-form-container {
    padding: 0 26%;
  }
}

.register-header {
  margin-bottom: var(--space-xl);
  display: flex;
  flex-direction: column;
}

.register-logo {
  width: 1.375rem;
  height: 1.125rem;
  margin-bottom: var(--space-lg);
  opacity: 0.7;
}

.register-title {
  font-size: var(--text-heading-md);
  font-weight: 600;
  color: var(--text-primary);
  margin-bottom: var(--space-md);
}

.register-subtitle {
  font-size: var(--text-body-sm);
  color: var(--text-secondary);
  font-weight: 300;
}

.register-footer {
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