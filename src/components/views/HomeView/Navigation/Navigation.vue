<script setup lang="ts">
import { ref } from "vue";

import useStore from "@src/store/store";

import {
  BellIcon,
  ChatBubbleOvalLeftIcon,
  Cog6ToothIcon,
  MoonIcon,
  PhoneIcon,
  SunIcon,
  UserIcon,
} from "@heroicons/vue/24/solid";
import AccountDropdown from "@src/components/views/HomeView/Navigation/AccountDropdown.vue";
import Logo from "@src/components/views/HomeView/Navigation/Logo.vue";
import NavLink from "@src/components/views/HomeView/Navigation/NavLink.vue";

const store = useStore();

const showDropdown = ref(false);

// (event) change the active sidebar component when clicking on a NavLink
const handleActiveSidebarComponentChange = (value: string) => {
  store.activeSidebarComponent = value;
};
</script>

<template>
  <div class="avian-navigation">
    <!--logo-->
    <Logo />

    <!--main navigation-->
    <div class="navigation-main">
      <nav aria-label="Main navigation">
        <ul class="navigation-list">
          <!--message button-->
          <li>
            <NavLink
              :icon="ChatBubbleOvalLeftIcon"
              title="Conversations"
              @click="() => handleActiveSidebarComponentChange('messages')"
              :active="store.activeSidebarComponent === 'messages'"
            />
          </li>

          <!--contacts list button-->
          <li>
            <NavLink
              :icon="UserIcon"
              title="Contacts"
              @click="() => handleActiveSidebarComponentChange('contacts')"
              :active="store.activeSidebarComponent === 'contacts'"
            />
          </li>

          <!--dropdown button small screen-->
          <li>
            <AccountDropdown
              id="small-profile-menu"
              class="mobile-only"
              aria-labelledby="small-profile-menu-button"
              :show-dropdown="showDropdown"
              :handle-show-dropdown="() => (showDropdown = true)"
              :handle-close-dropdown="() => (showDropdown = false)"
            />
          </li>

          <!--notifications button-->
          <li class="desktop-only">
            <NavLink
              :icon="BellIcon"
              title="Notifications"
              :notifications="3"
              @click="() => handleActiveSidebarComponentChange('notifications')"
              :active="store.activeSidebarComponent === 'notifications'"
            />
          </li>

          <!--voice call button-->
          <li>
            <NavLink
              :icon="PhoneIcon"
              title="Call log"
              @click="() => handleActiveSidebarComponentChange('phone')"
              :active="store.activeSidebarComponent === 'phone'"
            />
          </li>

          <!--settings button small screen-->
          <li class="mobile-only">
            <NavLink
              :icon="Cog6ToothIcon"
              title="Settings"
              @click="() => handleActiveSidebarComponentChange('settings')"
              :active="store.activeSidebarComponent === 'settings'"
            />
          </li>
        </ul>
      </nav>
    </div>

    <!--secondary navigation-->
    <div class="navigation-secondary">
      <nav aria-label="Extra navigation" class="desktop-only">
        <ul>
          <!--toggle dark mode button-->
          <li>
            <NavLink
              :icon="store.settings.darkMode ? SunIcon : MoonIcon"
              title="Night mode"
              @click="store.settings.darkMode = !store.settings.darkMode"
            />
          </li>
          <!--settings button-->
          <li>
            <NavLink
              :icon="Cog6ToothIcon"
              title="Settings"
              @click="() => handleActiveSidebarComponentChange('settings')"
              :active="store.activeSidebarComponent === 'settings'"
            />
          </li>
        </ul>
      </nav>

      <!--separator-->
      <hr class="navigation-separator desktop-only" />

      <!--user avatar-->
      <AccountDropdown
        id="profile-menu"
        class="desktop-only"
        aria-labelledby="profile-menu-button"
        :show-dropdown="showDropdown"
        :handle-show-dropdown="() => (showDropdown = true)"
        :handle-close-dropdown="() => (showDropdown = false)"
      />
    </div>
  </div>
</template>

<style scoped>
.avian-navigation {
  width: 100%;
  height: auto;
  padding: var(--compose-box-left-right-padding);
  display: flex;
  flex-direction: row;
  align-items: center;
  transition: all var(--t-normal);
}

.navigation-main {
  flex-grow: 1;
}

.navigation-list {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.navigation-separator {
  margin-bottom: 1.5rem;
  border-color: var(--border-default);
}

.mobile-only {
  display: block;
}

.desktop-only {
  display: none;
}

/* Media queries for desktop */
@media (min-width: 60.5rem) {
  .avian-navigation {
    width: var(--navbar-width);
    height: 100%;
    padding-top: 1.75rem;
    padding-bottom: 1.75rem;
    flex-direction: column;
  }

  .navigation-list {
    display: block;
  }

  .mobile-only {
    display: none;
  }

  .desktop-only {
    display: block;
  }
}
</style>
