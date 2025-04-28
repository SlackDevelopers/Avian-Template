<script setup lang="ts">
import cloudPatternPath from "@src/assets/images/clouds.png";
import blurPath from "@src/assets/images/blur.png";
</script>

<template>
  <div class="cover">
    <div
      class="cover-container"
      :style="{ 'background-image': `url(${cloudPatternPath})` }"
    >
      <div
        class="cover-content"
        :style="{ 'background-image': `url(${blurPath})` }"
      >
        <p class="cover-title">
          Blazingly fast messaging platform for the
          <span class="text-gradient">web.</span>
        </p>
        <p class="cover-description">
          Avian saves all the data in user's devices and uses a cryptographic
          protocols to sync the data across multiple browsers and devices.
        </p>
      </div>
    </div>
  </div>
</template>

<style scoped>
.cover {
  padding: var(--space-2xl);
  height: 100%;
  flex-basis: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
}

.cover-container {
  width: 100%;
  height: 100%;
  padding: 0 var(--space-lg);
  display: flex;
  align-items: center;
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  border-radius: var(--radius-lg);
}

.cover-content {
  padding: var(--space-2xl) var(--space-xl);
  border-radius: var(--radius-sm);
  background-size: cover;
  background-repeat: no-repeat;
}

.cover-title {
  font-size: var(--text-display);
  line-height: 1.2;
  margin-bottom: var(--space-lg);
  color: var(--text-on-color);
}

.cover-description {
  font-size: var(--text-body-sm);
  line-height: 1.5;
  color: var(--text-on-color);
}

.text-gradient {
  background: linear-gradient(to bottom right, #de6dce, #e7ddee);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}

@media (max-width: 768px) {
  .cover {
    display: none;
  }
}
</style>