<template>
  <div class="container">
    <p>{{ info.text }}</p>
    <button @click="onClicked">ボタン</button>
  </div>
</template>

<script lang="ts">
import { defineComponent, reactive } from "@nuxtjs/composition-api";

export default defineComponent({
  setup() {
    const info = reactive({
      text: 1,
    });
    const onClicked = () => {
      info.text++;
    };

    return { info, onClicked };
  },
});
</script>
