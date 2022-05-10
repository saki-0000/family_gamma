<template>
  <div class="container">
    <v-row no-gutters>
      <v-cols cols="auto">
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
      </v-cols>
      <v-cols cols="auto">
        <v-btn @click="addItem()">追加</v-btn>
      </v-cols>
    </v-row>
    <div v-for="item in userProfiles" :key="item.id">
      <v-row no-gutters>
        <v-text-field
          v-model="item.value"
          :counter="255"
          :label="item.profile_type_name"
          required
        ></v-text-field>
        <v-cols cols="auto">
          <v-fab-transition>
            <v-btn
              :key="test"
              @click="onClick"
              :fab="!test"
              :small="!test"
              :color="!test ? '' : 'error'"
            >
              <v-icon v-show="!test"> mdi-minus </v-icon>
              <div v-show="test">削除</div>
            </v-btn>
          </v-fab-transition>
        </v-cols>
      </v-row>
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
    const test = ref(false);
    const onClick = () => {
      test.value = !test.value;
    };

    return {
      userProfiles,
      profileTypes,
      excludeDuplicateProfileType,
      addItems,
      addItem,
      test,
      onClick,
    };
  },
});
</script>
