<script setup>
const { title, updateTitle } = useTitle();
updateTitle("Login Page");
const login = () => {
    console.log("ログインしました。");
};
const form = {
    email: "ewell.mills@example.org",
    password: "password",
};
const data = await $fetch("/api/hello");
</script>

<template>
    <v-form ref="form">
        {{ data }}
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
