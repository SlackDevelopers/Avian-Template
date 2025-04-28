<template>
  <div class="loading-row">
    <div class="loading-icon-container">
      <div class="loading-circle"></div>
    </div>

    <div class="loading-content">
      <div class="loading-line loading-line-short"></div>
      <div class="loading-line loading-line-long"></div>
    </div>
  </div>
</template>

<style scoped>
.loading-row {
  width: 100%;
  display: flex;
  padding: var(--space-lg) var(--space-lg);
  margin-bottom: var(--space-sm);
}

.loading-icon-container {
  margin-right: var(--space-md);
}

.loading-circle {
  width: 1.75rem;
  height: 1.75rem;
  border-radius: 50%;
  background-color: var(--skeleton-background);
  animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
}

.loading-content {
  flex-grow: 1;
}

.loading-line {
  height: 0.75rem;
  border-radius: 9999px;
  background-color: var(--skeleton-background);
  animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
}

.loading-line-short {
  width: 3rem;
  margin-bottom: var(--space-md);
}

.loading-line-long {
  width: 100%;
}

@media (min-width: 768px) {
  .loading-line-long {
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