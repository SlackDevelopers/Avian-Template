<script setup lang="ts">
import type { Ref } from "vue";
import type { IConversation } from "@src/types";

import useStore from "@src/store/store";
import { ref, inject, onMounted } from "vue";
import { getConversationIndex } from "@src/utils";

import {
  CheckIcon,
  FaceSmileIcon,
  MicrophoneIcon,
  PaperAirplaneIcon,
  PaperClipIcon,
  XCircleIcon,
} from "@heroicons/vue/24/outline";
import AttachmentsModal from "@src/components/shared/modals/AttachmentsModal/AttachmentsModal.vue";
import Button from "@src/components/ui/inputs/Button.vue";
import IconButton from "@src/components/ui/inputs/IconButton.vue";
import ScaleTransition from "@src/components/ui/transitions/ScaleTransition.vue";
import ReplyMessage from "@src/components/views/HomeView/Chat/ChatBottom/ReplyMessage.vue";
import EmojiPicker from "@src/components/ui/inputs/EmojiPicker/EmojiPicker.vue";
import Textarea from "@src/components/ui/inputs/Textarea.vue";

const store = useStore();

const activeConversation = <IConversation>inject("activeConversation");

// the content of the message.
const value: Ref<string> = ref("");

// determines whether the app is recording or not.
const recording = ref(false);

// open emoji picker.
const showPicker = ref(false);

// open modal used to send multiple attachments attachments.
const openAttachmentsModal = ref(false);

// start and stop recording.
const handleToggleRecording = () => {
  recording.value = !recording.value;
};

// stop recording without sending.
const handleCancelRecording = () => {
  recording.value = false;
};

// close picker when you click outside.
const handleClickOutside = (event: Event) => {
  let target = event.target as HTMLElement;
  let parent = target.parentElement as HTMLElement;

  if (
    target &&
    !target.classList.contains("toggle-picker-button") &&
    parent &&
    !parent.classList.contains("toggle-picker-button")
  ) {
    showPicker.value = false;
  }
};

// (event) set the draft message equals the content of the text area
const handleSetDraft = () => {
  const index = getConversationIndex(activeConversation.id);
  if (index !== undefined) {
    store.conversations[index].draftMessage = value.value;
  }
};

onMounted(() => {
  value.value = activeConversation.draftMessage;
});
</script>

<template>
  <div class="chat-bottom">
    <!--selected reply display-->
    <div
      class="reply-container"
      :class="{ 'has-reply': activeConversation?.replyMessage }"
    >
      <ReplyMessage />
    </div>

    <div
      class="compose-box"
      v-if="store.status !== 'loading'"
      :class="{'justify-between': recording}"
    >
      <div class="action-container">
        <!--select attachments button-->
        <IconButton
          v-if="!recording"
          class="attachment-button"
          title="open select attachments modal"
          aria-label="open select attachments modal"
          @click="openAttachmentsModal = true"
        >
          <PaperClipIcon class="action-icon" />
        </IconButton>

        <!--recording timer-->
        <p v-if="recording" class="recording-timer">00:11</p>
      </div>

      <!--message textarea-->
      <div class="textarea-container" v-if="!recording">
        <div class="relative">
          <Textarea
            class="compose-textarea"
            @value-changed="(newValue: string) => (value = newValue)"
            @input="handleSetDraft"
            :value="value"
            auto-resize
            cols="30"
            rows="1"
            placeholder="Write your message here"
            aria-label="Write your message here"
          />

          <!--emojis-->
          <div class="emoji-container">
            <!--emoji button-->
            <IconButton
              title="toggle emoji picker"
              aria-label="toggle emoji picker"
              @click="showPicker = !showPicker"
              class="emoji-button toggle-picker-button"
            >
              <XCircleIcon v-if="showPicker" class="action-icon" />
              <FaceSmileIcon
                v-else
                class="action-icon emoji-icon"
              />
            </IconButton>

            <!--emoji picker-->
            <ScaleTransition>
              <div
                v-click-outside="handleClickOutside"
                v-show="showPicker"
                class="emoji-picker-container"
              >
                <div role="none">
                  <EmojiPicker :show="showPicker" />
                </div>
              </div>
            </ScaleTransition>
          </div>
        </div>
      </div>

      <div class="action-container">
        <!--cancel recording button-->
        <div v-if="recording" @click="handleCancelRecording">
          <Button class="cancel-recording-button"> Cancel </Button>
        </div>
      </div>

      <div class="action-container flex">
        <!--finish recording button-->
        <IconButton
          v-if="recording"
          title="finish recording"
          aria-label="finish recording"
          @click="handleToggleRecording"
          class="recording-button"
        >
          <span class="recording-pulse"></span>

          <MicrophoneIcon class="recording-icon recording-icon-default" />
          <CheckIcon class="recording-icon recording-icon-hover" />
        </IconButton>

        <!--start recording button-->
        <IconButton
          v-else
          @click="handleToggleRecording"
          title="start recording"
          aria-label="start recording"
          class="mic-button"
        >
          <MicrophoneIcon class="action-icon" />
        </IconButton>

        <!--send message button-->
        <IconButton
          v-if="!recording"
          class="send-button"
          title="send message"
          aria-label="send message"
        >
          <PaperAirplaneIcon class="send-icon" />
        </IconButton>
      </div>
    </div>

    <AttachmentsModal
      :open="openAttachmentsModal"
      :close-modal="() => (openAttachmentsModal = false)"
    />
  </div>
</template>

<style scoped>
.chat-bottom {
  width: 100%;
}

.reply-container {
  position: relative;
  transition: all var(--t-normal);
}

.has-reply {
  padding-top: 3.75rem;
}

.compose-box {
  height: auto;
  min-height: var(--height-pane-footer);
  padding: var(--chat-spacing);
  display: flex;
  align-items: flex-end;
}

.action-container {
  min-height: 2.75rem;
}

.attachment-button,
.mic-button,
.emoji-button {
  width: 1.75rem;
  height: 1.75rem;
  color: var(--icon-lighter);
  background: transparent;
  border-radius: 9999px;
  transition: all var(--t-fast);
}

.attachment-button:hover,
.mic-button:hover,
.emoji-button:hover {
  color: var(--icon-primary);
  background-color: var(--background-default-hover);
}

@media (min-width: 60.5rem) {
  .attachment-button,
  .mic-button,
  .emoji-button {
    margin-right: 1.25rem;
  }
}

@media (max-width: 60.5rem) {
  .attachment-button,
  .mic-button,
  .emoji-button {
    margin-right: 1rem;
  }
}

.action-icon {
  width: 1.25rem;
  height: 1.25rem;
}

.emoji-icon {
  color: var(--icon-lighter);
}

.recording-timer {
  font-size: 0.75rem;
  font-weight: 300;
  line-height: 1rem;
  color: var(--icon-primary);
}

.textarea-container {
  flex-grow: 1;
  align-self: flex-end;
  margin-right: 1.25rem;
}

@media (max-width: 60.5rem) {
  .textarea-container {
    margin-right: 1rem;
  }
}

.compose-textarea {
  max-height: 5rem;
  padding-right: 3.125rem;
  resize: none;
  -ms-overflow-style: none;
  scrollbar-width: none;
}

.compose-textarea::-webkit-scrollbar {
  display: none;
}

.emoji-container {
  position: absolute;
  bottom: 0.8125rem;
  right: 0;
}

.emoji-picker-container {
  position: absolute;
  z-index: 10;
  bottom: 3.4375rem;
  margin-top: 0.5rem;
}

@media (min-width: 60.5rem) {
  .emoji-picker-container {
    right: 0;
  }
}

@media (max-width: 60.5rem) {
  .emoji-picker-container {
    right: -5rem;
  }
}

.cancel-recording-button {
  color: var(--danger);
  background-color: transparent;
}

.cancel-recording-button:hover {
  background-color: var(--background-default-hover);
}

.recording-button {
  position: relative;
  width: 1.75rem;
  height: 1.75rem;
  display: flex;
  justify-content: center;
  align-items: center;
  outline: none;
  border-radius: 9999px;
  background-color: var(--button-primary-background);
  transition: all var(--t-fast);
}

.recording-button:hover {
  background-color: var(--success);
}

.recording-pulse {
  position: absolute;
  display: inline-flex;
  height: 100%;
  width: 100%;
  border-radius: 9999px;
  background-color: var(--button-primary-background);
  opacity: 0.4;
  animation: ping 1.5s cubic-bezier(0, 0, 0.2, 1) infinite;
}

.recording-button:hover .recording-pulse {
  background-color: var(--success);
}

@keyframes ping {
  0% {
    transform: scale(1);
    opacity: 0.4;
  }
  75%, 100% {
    transform: scale(2);
    opacity: 0;
  }
}

.recording-icon {
  width: 1.25rem;
  height: 1.25rem;
  color: var(--button-primary);
}

.recording-icon-hover {
  display: none;
}

.recording-button:hover .recording-icon-default {
  display: none;
}

.recording-button:hover .recording-icon-hover {
  display: block;
}

.send-button {
  width: 1.75rem;
  height: 1.75rem;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 9999px;
  background-color: var(--button-primary-background);
  color: var(--button-primary);
  transition: all var(--t-fast);
}

.send-button:active {
  transform: scale(1.1);
}

.send-icon {
  width: 1.0625rem;
  height: 1.0625rem;
}
</style>

<style>
input[placeholder="Search emoji"] {
  background: rgba(0, 0, 0, 0);
}

.v3-emoji-picker .v3-header {
  border-bottom: 0;
}

.v3-emoji-picker .v3-footer {
  border-top: 0;
}
</style>
