<script setup lang="ts">
import { ChatBubbleOvalLeftIcon } from "@heroicons/vue/24/solid";
</script>

<template>
  <div class="empty-state-fullheight">
    <div class="empty-state-icon-circle-large">
      <ChatBubbleOvalLeftIcon class="empty-state-icon-large" />
    </div>

    <p class="empty-state-title">No chat selected</p>

    <p class="empty-state-description">
      Select a conversation from the conversation menu.
    </p>
  </div>
</template>

<style scoped>
.empty-state-fullheight {
  height: 100%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

.empty-state-icon-circle-large {
  width: 2.5rem;
  height: 2.5rem;
  margin-right: var(--space-md);
  margin-bottom: var(--space-lg);
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 50%;
  background-color: var(--background-subtle);
  transition: background-color 0.5s;
}

.empty-state-icon-large {
  width: 1.75rem;
  height: 1.75rem;
  color: var(--text-muted);
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