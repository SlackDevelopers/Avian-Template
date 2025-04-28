<script setup lang="ts">
import { useRoute } from "vue-router";
import { computed } from "vue";

import LoginForm from "@src/components/views/AccessView/LoginForm.vue";
import RegisterForm from "@src/components/views/AccessView/RegisterForm/RegisterForm.vue";
import Cover from "@src/components/views/AccessView/Cover.vue";
import FadeTransition from "@src/components/ui/transitions/FadeTransition.vue";

const route = useRoute();

const ActiveMethod = computed((): any => {
  if (route.params.method === "sign-up") {
    return RegisterForm;
  } else if (route.params.method === "sign-in") {
    return LoginForm;
  }
});
</script>

<template>
  <div class="access-view">
    <div class="access-view-container">
      <!--login and register forms-->
      <FadeTransition>
        <component :is="ActiveMethod" />
      </FadeTransition>
      <Cover />
    </div>
  </div>
</template>

<style scoped>
.access-view {
  width: 100%;
  height: 100%;
}

.access-view-container {
  width: 100%;
  height: 100%;
  display: flex;
  background-color: var(--surface-background);
}
</style>
