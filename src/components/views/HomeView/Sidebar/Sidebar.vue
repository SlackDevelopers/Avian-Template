<script setup lang="ts">
import { computed } from "vue";

import useStore from "@src/store/store";

import FadeTransition from "@src/components/ui/transitions/FadeTransition.vue";
import Calls from "@src/components/views/HomeView/Sidebar/Calls/Calls.vue";
import Contacts from "@src/components/views/HomeView/Sidebar/Contacts/Contacts.vue";
import Conversations from "@src/components/views/HomeView/Sidebar/Conversations/Conversations.vue";
import Notifications from "@src/components/views/HomeView/Sidebar/Notifications/Notifications.vue";
import Settings from "@src/components/views/HomeView/Sidebar/Settings/Settings.vue";

const store = useStore();

// the selected sidebar component (e.g message/notifications/settings)
const ActiveComponent = computed((): any => {
  if (store.activeSidebarComponent === "messages") {
    return Conversations;
  } else if (store.activeSidebarComponent === "contacts") {
    return Contacts;
  } else if (store.activeSidebarComponent === "notifications") {
    return Notifications;
  } else if (store.activeSidebarComponent === "phone") {
    return Calls;
  } else if (store.activeSidebarComponent === "settings") {
    return Settings;
  }
});
</script>

<template>
  <aside class="sidebar-container">
    <FadeTransition>
      <component :is="ActiveComponent" class="sidebar-content" />
    </FadeTransition>
  </aside>
</template>

<style scoped>
.sidebar-container {
  width: 100%;
  height: 100%;
  padding: 0 var(--compose-box-left-right-padding);
  display: flex;
  flex-direction: column;
  overflow: visible;
  transition: all var(--t-normal);
}

.sidebar-content {
  height: 100%;
  display: flex;
  flex-direction: column;
}

@media (min-width: 60.5rem) {
  .sidebar-container {
    width: var(--navbar-width-expanded);
    padding: 0;
  }
}
</style>
