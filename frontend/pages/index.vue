<template>
  <v-row justify="center" align="center">
    <v-col cols="12" sm="8" md="6">
      <v-card class="logo py-4 d-flex justify-center">
        <NuxtLogo />
        <VuetifyLogo />
        {{ greet }}
      </v-card>
    </v-col>
  </v-row>
</template>

<script lang="ts">
import Vue from "vue";

export default Vue.extend({
  async asyncData({ app }): Promise<object> {
    const greet: string = await app.$axios.$get("/").catch((err) => err);
    return { greet };
  },
});
</script>
