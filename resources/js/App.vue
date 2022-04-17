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
import { onMounted } from "vue";
import { useStore } from "vuex";

const store = useStore();

onMounted(() => {
    store.dispatch("loadEnderecos");
});
</script>
