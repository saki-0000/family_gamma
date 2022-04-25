<script setup>
const { title } = useTitle();

useHead({
    titleTemplate: "Family_β - %s",
    title,
});
</script>

<template>
    <v-app>
        <v-app-bar>
            <v-app-bar-title>Family_β</v-app-bar-title>
            <v-btn to="/">Home</v-btn>
            <v-btn to="/login">ログイン</v-btn>
        </v-app-bar>
        <v-main>
            <div class="text-h1">{{ title }}</div>
            <slot />
        </v-main>
    </v-app>
</template>
