<template>
  <div class="loading-block">
    <div class="loading-header"></div>

    <div class="loading-row-container" v-for="item in 2">
      <div class="loading-row-line"></div>
    </div>
  </div>
</template>

<style scoped>
.loading-block {
  margin-bottom: var(--space-xl);
}

.loading-header {
  height: 0.75rem;
  border-radius: var(--radius-sm);
  background-color: var(--skeleton-background);
  margin: var(--space-lg) var(--space-lg) var(--space-lg) var(--space-lg);
  animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
}

@media (min-width: 768px) {
  .loading-header {
    width: 6rem;
  }
}

@media (max-width: 768px) {
  .loading-header {
    width: 10rem;
  }
}

.loading-row-container {
  margin: var(--space-xl) var(--space-lg);
  display: flex;
  justify-content: space-between;
}

.loading-row-line {
  height: 0.75rem;
  border-radius: var(--radius-sm);
  background-color: var(--skeleton-background);
  animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
  width: 100%;
}

@media (min-width: 768px) {
  .loading-row-line {
    width: 13rem;
  }
}

@keyframes pulse {
  0%, 100% {
    opacity: 1;
  }
  50% {
    opacity: 0.5;
  }
}
</style>