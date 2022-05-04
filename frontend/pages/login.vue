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
import { defineComponent, useContext } from "@nuxtjs/composition-api";

export default defineComponent({
  setup() {
    const { app } = useContext();
    app.$axios.get("/sanctum/csrf-cookie");
    const login = async () => {
      try {
        const response = await app.$auth.loginWith("local", {
          data: form,
        });
        console.log(response);
      } catch (error) {
        console.log(error);
      }
    };
    const form = {
      email: "",
      password: "",
    };

    return { form, login };
  },
});
</script>
