<template>
  <div class="container">
    <p>{{ info.text }}</p>
    <button @click="onClicked">ボタン</button>
    {{ data }}
    {{ user }}
  </div>
</template>

<script lang="ts">
import {
  defineComponent,
  reactive,
  useAsync,
  useContext,
  useStore,
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
    const data = useAsync(() => app.$axios.$get("/api").catch((err) => err));
    const store = useStore();

    // ts対応がまだ
    /** @ts-ignore */
    const user = store.state.auth.user;

    return { info, onClicked, data, user };
  },
});
</script>
