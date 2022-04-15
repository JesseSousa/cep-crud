<template>
    <div class="container">
        <div class="d-flex justify-content-between mb-3">
            <h2>Endereços Cadastrados</h2>
            <button class="btn btn-success">Cadastrar Novo Endereco</button>
        </div>
        <endereco-list></endereco-list>
    </div>
</template>

<script setup>
import EnderecoList from "../components/EnderecoList.vue";
</script>
