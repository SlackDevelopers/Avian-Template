<script setup lang="ts">
import { InboxIcon } from "@heroicons/vue/24/outline";
</script>

<template>
  <div class="empty-state">
    <!--icon-->
    <div class="empty-state-icon-container">
      <div class="empty-state-icon-circle">
        <InboxIcon class="empty-state-icon" />
      </div>
    </div>

    <!--content-->
    <div class="empty-state-content">
      <p class="empty-state-title">No archived conversations</p>
      <p class="empty-state-description">
        select archive from the conversation context menu to save one.
      </p>
    </div>
  </div>
</template>

<style scoped>
.empty-state {
  width: 100%;
  padding: var(--space-lg);
  display: flex;
}

.empty-state-icon-circle {
  width: 1.75rem;
  height: 1.75rem;
  margin-right: var(--space-md);
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 50%;
  background-color: var(--background-subtle);
  transition: background-color 0.5s;
}

.empty-state-icon {
  width: 1.25rem;
  height: 1.25rem;
  color: var(--text-secondary);
}

.empty-state-content {
  display: flex;
  flex-direction: column;
}

.empty-state-title {
  font-size: var(--text-heading-md);
  color: var(--text-primary);
  margin-bottom: var(--space-sm);
}

.empty-state-description {
  font-size: var(--text-body-md);
  color: var(--text-secondary);
  display: flex;
}
</style>