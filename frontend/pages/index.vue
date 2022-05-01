<template>
  <div class="container">
    <p>{{ info.text }}</p>
    <button @click="onClicked">ボタン</button>
    {{ data }}
  </div>
</template>

<script lang="ts">
import {
  defineComponent,
  reactive,
  useAsync,
  useContext,
} from "@nuxtjs/composition-api";

export default defineComponent({
  setup() {
    const info = reactive({
      text: 1,
    });
    const onClicked = () => {
      info.text++;
    };
    const { app } = useContext();
    const data = useAsync(() => app.$axios.$get("/").catch((err) => err));

    return { info, onClicked, data };
  },
});
</script>
