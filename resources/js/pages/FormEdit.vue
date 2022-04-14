<template>
    <div class="container">
        <h2>Editar Endereco</h2>
        <endereco-form :enderecoId="id"></endereco-form>
    </div>
</template>

<script setup>
import { ref } from "vue";
import { useRoute } from "vue-router";
import EnderecoForm from "../components/EnderecoForm.vue";

const route = useRoute();
const id = ref(route.params.id);
</script>
