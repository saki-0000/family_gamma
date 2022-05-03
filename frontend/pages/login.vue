<template>
  <v-form ref="form">
    <v-text-field
      v-model="form.password"
      type="password"
      label="password"
    ></v-text-field>
    <v-text-field
      v-model="form.email"
      counter="128"
      label="email"
    ></v-text-field
    ><v-btn @click="login"> Login </v-btn>
  </v-form>
</template>

<script lang="ts">
import { defineComponent } from "@nuxtjs/composition-api";

export default defineComponent({
  setup() {
    const login = () => {
      console.log("ログインしました。");
    };
    const form = {
      email: "ewell.mills@example.org",
      password: "password",
    };

    return { form, login };
  },
});
</script>
