<template>
  <div class="container">
    <v-autocomplete
      v-model="addItems"
      :items="excludeDuplicateProfileType()"
      item-text="name"
      item-value="name"
      chips
      small-chips
      label="追加する項目"
      multiple
    ></v-autocomplete>
    <v-btn @click="addItem()">追加</v-btn>
    <div v-for="item in userProfiles" :key="item.id">
      <v-text-field
        v-model="item.value"
        :counter="255"
        :label="item.profile_type_name"
        required
      ></v-text-field>
    </div>
  </div>
</template>

<script lang="ts">
import {
  defineComponent,
  useAsync,
  useContext,
  ref,
} from "@nuxtjs/composition-api";

export type UserProfile = {
  id: number;
  value: string;
  comment: string;
  profile_type_name: string;
};
export type ProfileType = {
  id: number;
  name: string;
  comment: string;
};
export default defineComponent({
  setup() {
    const { $axios } = useContext();
    const userProfiles = useAsync<UserProfile[]>(() =>
      $axios.$get<UserProfile[]>("/api/user").catch((err) => err)
    );

    const excludeDuplicateProfileType = () => {
      return profileTypes.value?.filter(
        (type) => !userProfileType().includes(type.name)
      );
    };
    const userProfileType = () => {
      return userProfiles.value === null
        ? []
        : userProfiles.value.map((profile) => profile.profile_type_name);
    };
    const addItems = ref<string[]>([]);
    const addItem = () => {
      userProfiles.value?.push(
        ...addItems.value.map(
          (item): UserProfile => ({
            id: -1,
            value: "",
            comment: "",
            profile_type_name: item,
          })
        )
      );
      addItems.value = [];
    };
    // const form =
    const profileTypes = useAsync<ProfileType[]>(() =>
      $axios.$get<ProfileType[]>("api/profile/type").catch((err) => err)
    );

    return {
      userProfiles,
      profileTypes,
      excludeDuplicateProfileType,
      addItems,
      addItem,
    };
  },
});
</script>
