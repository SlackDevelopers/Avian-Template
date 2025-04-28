<script setup lang="ts">
import type { IConversation } from "@src/types";

import { inject, ref } from "vue";

import useStore from "@src/store/store";

import ConversationInfoModal from "@src/components/shared/modals/ConversationInfoModal/ConversationInfoModal.vue";
import SearchModal from "@src/components/shared/modals/SearchModal/SearchModal.vue";
import VoiceCallModal from "@src/components/shared/modals/VoiceCallModal/VoiceCallModal.vue";
import PinnedMessage from "@src/components/views/HomeView/Chat/ChatTop/PinnedMessage.vue";
import ConversationInfoSection from "./ConversationInfoSection.vue";
import SelectSection from "./SelectSection.vue";

const props = defineProps<{
  selectMode: boolean;
  selectAll: boolean;
  handleSelectAll: () => void;
  handleDeselectAll: () => void;
  handleCloseSelect: () => void;
}>();

const store = useStore();

const activeConversation = <IConversation>inject("activeConversation");

const openSearch = ref(false);

const openInfo = ref(false);

// (event) open search modal
const handleOpenSearch = () => {
  openSearch.value = true;
};

// (event) open info modal
const handleOpenInfo = () => {
  openInfo.value = true;
};

// (event) close the voice call modal and minimize the call
const handleCloseVoiceCallModal = (endCall: boolean) => {
  if (endCall) {
    store.activeCall = undefined;
    store.callMinimized = false;
  }

  if (store.openVoiceCall) {
    store.openVoiceCall = false;
    store.callMinimized = true;
  }
};
</script>

<template>
  <div class="chat-top">
    <!--Top section-->
    <div class="chat-top-header">
      <SelectSection
        v-if="props.selectMode"
        :select-mode="props.selectMode"
        :select-all="props.selectAll"
        :handle-close-select="props.handleCloseSelect"
        :handle-select-all="props.handleSelectAll"
        :handle-deselect-all="props.handleDeselectAll"
      />
      <ConversationInfoSection
        v-else
        :handle-open-info="handleOpenInfo"
        :handle-open-search="handleOpenSearch"
      />
    </div>

    <!--Pinned Message-->
    <div
      class="pinned-message-container"
      :class="{'has-pinned-message': activeConversation.pinnedMessage && !activeConversation.pinnedMessageHidden}"
    >
      <PinnedMessage :active-conversation="activeConversation" />
    </div>

    <!--Search modal-->
    <SearchModal
      :open="openSearch"
      :close-modal="() => (openSearch = false)"
      :conversation="activeConversation"
    />

    <!--Contact info modal-->
    <ConversationInfoModal
      :open="openInfo"
      :closeModal="() => (openInfo = false)"
      :conversation="activeConversation"
    />

    <!--voice call modal-->
    <VoiceCallModal
      :open="store.openVoiceCall"
      :close-modal="handleCloseVoiceCallModal"
    />
  </div>
</template>

<style scoped>
.chat-top {
  width: 100%;
}

.chat-top-header {
  width: 100%;
  min-height: var(--h-pane-header);
  padding: 1.5rem var(--compose-box-left-right-padding);
}

.pinned-message-container {
  position: relative;
  transition: padding var(--t-normal);
}

.has-pinned-message {
  padding-bottom: 3.75rem;
}
</style>
