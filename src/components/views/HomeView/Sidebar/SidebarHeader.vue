<template>
  <div class="sidebar-header">
    <h2 tabindex="0" class="sidebar-title">
      <slot name="title"></slot>
    </h2>

    <div class="sidebar-actions">
      <slot name="actions"></slot>
    </div>
  </div>
</template>

<style scoped>
.sidebar-header {
  width: 100%;
  min-height: var(--h-pane-header);
  max-height: fit-content;
  padding: 1.5rem var(--compose-box-left-right-padding);
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.sidebar-title {
  font-size: 1.25rem;
  line-height: 1rem;
  letter-spacing: 0.01rem;
  color: var(--text-primary);
  outline: none;
}

.sidebar-actions {
  display: flex;
  align-items: center;
}
</style>
