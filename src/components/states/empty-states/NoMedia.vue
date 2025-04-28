<script setup lang="ts">
import { VideoCameraSlashIcon } from "@heroicons/vue/24/outline";

const props = defineProps<{
  vertical?: boolean;
}>();
</script>

<template>
  <div :class="['empty-state', props.vertical ? 'empty-state-vertical' : '']">
    <!--icon-->
    <div :class="props.vertical ? 'empty-state-icon-vertical' : 'empty-state-icon-container'">
      <div class="empty-state-icon-circle">
        <VideoCameraSlashIcon class="empty-state-icon" />
      </div>
    </div>

    <!--content-->
    <div :class="['empty-state-content', props.vertical ? '' : 'empty-state-content-horizontal']">
      <p class="empty-state-title">No Media</p>
      <p class="empty-state-description">No media in this conversations.</p>
    </div>
  </div>
</template>

<style scoped>
.empty-state {
  width: 100%;
  padding: var(--space-lg);
  display: flex;
  flex-direction: row;
}

.empty-state-vertical {
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

.empty-state-icon-container {
  display: flex;
}

.empty-state-icon-vertical {
  margin-bottom: var(--space-sm);
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

.empty-state-content-horizontal {
  align-items: flex-start;
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