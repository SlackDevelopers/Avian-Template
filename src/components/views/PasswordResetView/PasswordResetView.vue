<script setup lang="ts">
import ResetForm from "@src/components/views/PasswordResetView/PasswordResetForm.vue";
</script>

<template>
  <div class="reset-view">
    <div class="reset-container">
      <ResetForm />
    </div>
  </div>
</template>

<style scoped>
.reset-view {
  width: 100%;
}

.reset-container {
  width: 100%;
  height: 100vh;
  display: flex;
}
</style>