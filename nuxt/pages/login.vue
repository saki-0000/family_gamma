<script setup>
const { title, updateTitle } = useTitle();
updateTitle("Login Page");
const login = () => {
    console.log("ログインしました。");
};
const form = {
    email: "",
    password: "",
};
</script>

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
