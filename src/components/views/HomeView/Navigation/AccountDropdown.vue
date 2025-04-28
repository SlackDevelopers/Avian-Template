<script setup lang="ts">
import useStore from "@src/store/store";

import {
  ArrowLeftOnRectangleIcon,
  ArrowPathIcon,
  InformationCircleIcon,
} from "@heroicons/vue/24/outline";
import Dropdown from "@src/components/ui/navigation/Dropdown/Dropdown.vue";
import DropdownLink from "@src/components/ui/navigation/Dropdown/DropdownLink.vue";
import { RouterLink } from "vue-router";

const props = defineProps<{
  showDropdown: boolean;
  handleCloseDropdown: () => void;
  handleShowDropdown: () => void;
  id: string;
}>();

const store = useStore();

// (event) close dropdown menu when clicking outside
const handleCloseOnClickOutside = (event: Event) => {
  if (
    !["user-avatar", "profile-menu-button"].includes(
      (event.target as HTMLButtonElement).id,
    )
  ) {
    props.handleCloseDropdown();
  }
};
</script>

<template>
  <div class="account-dropdown">
    <!--toggle dropdown button-->
    <button
      :id="props.id + '-button'"
      @click="handleShowDropdown"
      class="avatar-button"
      :aria-expanded="showDropdown"
      aria-controls="profile-menu"
      aria-label="toggle profile menu"
    >
      <div
        id="user-avatar"
        :style="{ backgroundImage: `url(${store.user?.avatar})` }"
        class="avatar-image"
      ></div>
    </button>

    <!--dropdown menu-->
    <Dropdown
      :id="props.id + '-dropdown'"
      :aria-labelledby="props.id + '-button'"
      :show="props.showDropdown"
      :position="[
        'md:bottom-0',
        'md:left-[2.5rem]',
        'md:top-[auto]',
        'bottom-[3.125rem]',
        'left-[-4.8125rem]',
      ]"
      :handle-click-outside="handleCloseOnClickOutside"
      :close-dropdown="props.handleCloseDropdown"
    >
      <button
        class="account-menu-item account-menu-item-primary"
        aria-label="Show profile information"
        role="menuitem"
        @click="props.handleCloseDropdown"
      >
        <InformationCircleIcon class="menu-item-icon" />
        Profile Information
      </button>

      <RouterLink
        to="/reset/"
        class="account-menu-item account-menu-item-primary"
        aria-label="change password"
        role="menuitem"
        @click="props.handleCloseDropdown"
      >
        <ArrowPathIcon class="menu-item-icon" />
        Password Change
      </RouterLink>

      <RouterLink
        to="/access/sign-in/"
        class="account-menu-item account-menu-item-danger"
        aria-label="logout"
        role="menuitem"
        @click.prevent="props.handleCloseDropdown"
      >
        <ArrowLeftOnRectangleIcon class="menu-item-icon menu-item-icon-danger" />
        Logout
      </RouterLink>
    </Dropdown>
  </div>
</template>

<style scoped>
.account-dropdown {
  position: relative;
}

.avatar-button {
  background-color: var(--background-default);
  border-radius: 9999px;
  outline: none;
  transition: all var(--t-fast);
  box-shadow: 0 0.125rem 0.3125rem rgba(var(--focus-rgb), 0.3),
              0.125rem 0 0.3125rem rgba(var(--focus-rgb), 0.3),
              -0.125rem 0 0.3125rem rgba(var(--focus-rgb), 0.3),
              0 -0.125rem 0.3125rem rgba(var(--focus-rgb), 0.3);
}

.avatar-button:active,
.avatar-button:focus {
  transform: scale(1.1);
}

.avatar-image {
  width: 1.75rem;
  height: 1.75rem;
  border-radius: 9999px;
  background-size: cover;
  background-position: center;
}

.account-menu-item {
  width: 100%;
  padding: 0.75rem 1rem;
  display: flex;
  align-items: center;
  border-bottom-width: 1px;
  outline: none;
  font-size: 0.875rem;
  transition: all var(--t-fast);
}

.account-menu-item-primary {
  color: var(--text-primary);
  border-color: var(--border-default);
}

.account-menu-item-primary:hover {
  background-color: var(--background-default-hover);
}

.account-menu-item-danger {
  color: var(--danger);
  border-color: var(--border-default);
}

.account-menu-item-danger:hover {
  background-color: var(--background-default-hover);
}

.menu-item-icon {
  height: 1.25rem;
  width: 1.25rem;
  margin-right: 0.75rem;
  color: var(--text-primary);
  opacity: 0.7;
}

.menu-item-icon-danger {
  color: var(--danger);
}
</style>
