<template>
    <nav class="navbar navbar-exand-lg navbar-dark bg-secondary mb-3">
        <div class="container">
            <router-link to="/" class="navbar-brand fw-bold fs-3">
                CRUD CEP
            </router-link>
        </div>
    </nav>
    <router-view></router-view>
</template>

<script setup>
import { onMounted, watch } from "vue";
import { useStore } from "vuex";
import { useRoute } from "vue-router";

const store = useStore();

const route = useRoute();

onMounted(() => {
    store.dispatch("loadEnderecos");
});

watch(
    () => route.path,
    () => {
        store.dispatch("loadEnderecos");
    }
);
</script>
