<script setup lang="ts">
import useStore from "@src/store/store";

import FadeTransition from "@src/components/ui/transitions/FadeTransition.vue";
import Navigation from "@src/components/views/HomeView/Navigation/Navigation.vue";
import Sidebar from "@src/components/views/HomeView/Sidebar/Sidebar.vue";
import { getActiveConversationId } from "@src/utils";

const store = useStore();
</script>

<template>
  <KeepAlive>
    <div class="home-container">
      <!--navigation-bar-->
      <Navigation class="nav-mobile-order" />
      
      <!--sidebar-->
      <Sidebar class="sidebar-wrapper" />
      
      <!--chat-->
      <div
        id="mainContent"
        class="chat-container"
        :class="{
          'chat-container-active': getActiveConversationId(),
          'chat-container-hidden': !getActiveConversationId()
        }"
        role="region"
      >
        <router-view v-slot="{ Component }">
          <FadeTransition name="fade" mode="out-in">
            <component :is="Component" :key="getActiveConversationId()" />
          </FadeTransition>
        </router-view>
      </div>
    </div>
  </KeepAlive>
</template>

<style scoped>
.home-container {
  position: relative;
  height: 100%;
  display: flex;
  flex-direction: column;
  overflow: hidden;
}

.nav-mobile-order {
  order: 1;
}

.sidebar-wrapper {
  flex-grow: 1;
  overflow-y: scroll;
  -ms-overflow-style: none;
  scrollbar-width: none;
}

.sidebar-wrapper::-webkit-scrollbar {
  display: none;
}

.chat-container {
  position: absolute;
  z-index: 10;
  flex-grow: 1;
  height: 100%;
  width: 100%;
  background-color: var(--background-default);
  transition: all var(--t-normal);
  -ms-overflow-style: none;
  scrollbar-width: none;
}

.chat-container::-webkit-scrollbar {
  display: none;
}

.chat-container-active {
  left: 0;
  position: static;
}

.chat-container-hidden {
  left: 62.5rem;
}

/* Desktop styles */
@media (min-width: 60.5rem) {
  .home-container {
    flex-direction: row;
    position: static;
  }

  .nav-mobile-order {
    order: initial;
  }

  .sidebar-wrapper {
    flex-grow: 0;
    overflow: visible;
  }

  .chat-container {
    position: static;
    width: fit-content;
  }
}
</style>
