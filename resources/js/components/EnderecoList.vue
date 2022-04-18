<template>
    <ul class="list-group">
        <li
            v-for="endereco in enderecos"
            class="list-group-item d-flex justify-content-between"
        >
            <div class="text">
                <h4>
                    {{ endereco.bairro }}, {{ endereco.cidade }},
                    {{ endereco.uf }}
                </h4>
                <p class="text-muted">CEP: {{ endereco.cep }}</p>
            </div>

            <div class="buttons">
                <router-link :to="`/edit/${endereco.id}`">
                    <button class="btn btn-outline-primary">Editar</button>
                </router-link>
                <button
                    @click="deleteEndereco(endereco.id)"
                    class="btn btn-outline-danger ms-3"
                >
                    Deletar
                </button>
            </div>
        </li>
    </ul>
</template>

<script setup>
import { computed } from "vue";
import { useStore } from "vuex";
import axios from "axios";

const store = useStore();

const enderecos = computed(() => store.state.enderecos);

const deleteEndereco = (id) => {
    axios
        .delete(`/api/enderecos/${id}`)
        .then(() => store.dispatch("loadEnderecos"));
};
</script>
