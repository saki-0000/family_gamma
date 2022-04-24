<script setup>
const route = useRoute();
const title = ref(route.meta.title);

useHead({
    title: route.meta.title,
    titleTemplate: "Family_β - %s",
});
</script>

<template>
    <v-app>
        <v-app-bar>
            <v-app-bar-title>Family_β</v-app-bar-title>
        </v-app-bar>
        <v-main>
            <div class="text-h1">{{ title }}</div>
            <slot />
        </v-main>
    </v-app>
</template>
