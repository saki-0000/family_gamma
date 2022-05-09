<template>
  <div class="container">
    <div v-for="item in data" :key="item.id">
      <v-text-field
        v-model="item.value"
        :rules="nameRules"
        :counter="10"
        :label="item.profile_type_name"
        required
      ></v-text-field>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent, useAsync, useContext } from "@nuxtjs/composition-api";

export type UserProfile = {
  id: number;
  value: string;
  comment: string;
  profile_type_name: string;
};
export default defineComponent({
  setup() {
    const { $axios } = useContext();
    const data = useAsync<UserProfile[]>(() =>
      $axios.$get<UserProfile[]>("/api/user").catch((err) => err)
    );
    // const form =

    return { data };
  },
});
</script>
