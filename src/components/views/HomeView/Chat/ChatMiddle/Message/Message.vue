<script setup lang="ts">
import type {
  IConversation,
  IMessage,
  IPreviewData,
  IRecording,
} from "@src/types";
import type { Ref } from "vue";

import linkifyStr from "linkify-string";
import { inject, ref } from "vue";

import { getFullName, getMessageById } from "@src/utils";

import Attachments from "@src/components/views/HomeView/Chat/ChatMiddle/Message/Attachments.vue";
import LinkPreview from "@src/components/views/HomeView/Chat/ChatMiddle/Message/LinkPreview.vue";
import MessageContextMenu from "@src/components/views/HomeView/Chat/ChatMiddle/Message/MessageContextMenu.vue";
import Receipt from "@src/components/views/HomeView/Chat/ChatMiddle/Message/Receipt.vue";
import Recording from "@src/components/views/HomeView/Chat/ChatMiddle/Message/Recording.vue";
import MessagePreview from "@src/components/views/HomeView/Chat/MessagePreview.vue";

const props = defineProps<{
  message: IMessage;
  followUp: boolean;
  self: boolean;
  divider?: boolean;
  selected?: boolean;
  handleSelectMessage: (messageId: number) => void;
  handleDeselectMessage: (messageId: number) => void;
}>();

const activeConversation = <IConversation>inject("activeConversation");

const showContextMenu = ref(false);

const contextMenuCoordinations: Ref<{ x: number; y: number }> = ref({
  x: 0,
  y: 0,
});

// open context menu.
const handleShowContextMenu = (event: any) => {
  showContextMenu.value = true;
  contextMenuCoordinations.value = {
    x:
      window.innerWidth - 220 <= event.pageX
        ? window.innerWidth - 250
        : event.pageX,
    y:
      window.innerHeight - 300 <= event.pageY
        ? window.innerHeight - 250
        : event.pageY,
  };
};

// closes the context menu
const handleCloseContextMenu = () => {
  showContextMenu.value = false;
};

// close context menu when opening a new one.
const contextConfig = {
  handler: handleCloseContextMenu,
  events: ["contextmenu"],
};

// decide whether to show or hide avatar next to the image.
const hideAvatar = () => {
  if (props.divider && !props.self) {
    return false;
  } else {
    if (props.followUp) {
      return true;
    }
    if (props.self) {
      return true;
    }
  }
};

// reply message
const replyMessage = getMessageById(activeConversation, props.message.replyTo);
</script>

<template>
  <div class="message-wrapper">
    <div class="message-container" :class="{ 'message-self': props.self }">
      <!--avatar-->
      <div class="avatar-container" :class="{ 'avatar-followup': props.followUp && !divider }">
        <div
          v-if="!hideAvatar()"
          :aria-label="getFullName(props.message.sender)"
          class="avatar-wrapper"
        >
          <div
            :style="{ backgroundImage: `url(${props.message.sender.avatar})` }"
            class="avatar-image"
          ></div>
        </div>
      </div>

      <div class="message-content">
        <!--bubble-->
        <div
          @click="handleCloseContextMenu"
          v-click-outside="contextConfig"
          @contextmenu.prevent="handleShowContextMenu"
          class="message-bubble"
          :class="{
            'message-bubble-self': props.self,
            'message-bubble-other': !props.self,
            'message-bubble-selected': props.selected
          }"
        >
          <!--reply to-->
          <MessagePreview
            v-if="replyMessage"
            :message="replyMessage"
            :self="props.self"
            class="message-reply"
          />

          <!--content-->
          <p
            v-if="props.message.content && props.message.type !== 'recording'"
            class="message-text"
            v-html="
              linkifyStr(props.message.content as string, {
                className: props.self ? 'message-link-self' : 'message-link-other',
                format: {
                  url: (value) =>
                    value.length > 50 ? value.slice(0, 50) + `…` : value,
                },
              })
            "
            tabindex="0"
          ></p>

          <!--recording-->
          <div
            v-else-if="
              props.message.content && props.message.type === 'recording'
            "
          >
            <Recording
              :recording="<IRecording>props.message.content"
              :self="props.self"
            />
          </div>

          <!--attachments-->
          <Attachments
            v-if="(props.message.attachments as [])?.length > 0"
            :message="props.message"
            :self="props.self"
          />

          <!--link preview-->
          <LinkPreview
            v-if="props.message.previewData && !props.message.attachments"
            :self="props.self"
            :preview-data="props.message.previewData as IPreviewData"
            class="message-link-preview"
          />
        </div>

        <!--date-->
        <div class="message-date" :class="{'message-date-self': props.self}">
          <p class="message-timestamp">
            {{ props.message.date }}
          </p>
        </div>

        <!--read receipt-->
        <Receipt v-if="props.self" :state="props.message.state" />
      </div>
    </div>
    <MessageContextMenu
      :selected="props.selected"
      :message="props.message"
      :show="showContextMenu"
      :left="contextMenuCoordinations.x"
      :top="contextMenuCoordinations.y"
      :handle-close-context-menu="handleCloseContextMenu"
      :handle-select-message="handleSelectMessage"
      :handle-deselect-message="handleDeselectMessage"
    />
  </div>
</template>

<style scoped>
.message-wrapper {
  user-select: none;
}

.message-container {
  display: flex;
  margin-bottom: 1.5rem;
}

.message-self {
  justify-content: flex-end;
}

@media (min-width: 60.5rem) {
  .message-container {
    margin-bottom: 1.25rem;
  }
}

.avatar-container {
  margin-right: 1rem;
}

.avatar-followup {
  margin-left: 2.25rem;
}

.avatar-wrapper {
  outline: none;
}

.avatar-image {
  width: 2.25rem;
  height: 2.25rem;
  background-size: cover;
  background-position: center;
  border-radius: 50%;
}

.message-content {
  display: flex;
  align-items: flex-end;
}

.message-bubble {
  max-width: 31.25rem;
  padding: 1.25rem;
  border-radius: 0 0 var(--radius-bubble) var(--radius-bubble);
  transition: all var(--t-normal);
}

.message-bubble-self {
  border-top-left-radius: var(--radius-bubble);
  margin-left: 1rem;
  order: 2;
  background-color: var(--outgoing-background);
}

.message-bubble-other {
  border-top-right-radius: var(--radius-bubble);
  margin-right: 1rem;
  background-color: var(--incoming-background);
}

.message-bubble-selected {
  background-color: var(--focus-lighter);
}

.message-reply {
  margin-bottom: 1.25rem;
  padding: 0 0.75rem;
}

.message-text {
  font-size: 0.875rem;
  font-weight: 400;
  line-height: 1rem;
  letter-spacing: 0.01rem;
  color: var(--text-primary);
  outline: none;
}

.message-link-self {
  color: var(--text-primary);
  opacity: 0.7;
}

.message-link-other {
  color: var(--focus);
}

.message-link-preview {
  margin-top: 1.25rem;
}

.message-date {
  margin-right: 1rem;
}

.message-date-self {
  margin-left: 1rem;
  margin-right: 0;
  order: 1;
}

.message-timestamp {
  font-size: 0.75rem;
  font-weight: 300;
  line-height: 1rem;
  letter-spacing: 0.01rem;
  color: var(--text-primary);
  white-space: pre;
}
</style>
