<template>
    <form @submit.prevent="submitForm()">
        <div v-show="error" class="alert alert-danger" role="alert">
            Verifique se os dados estão corretos.
        </div>
        <div v-show="success" class="alert alert-success" role="alert">
            O Endereço foi cadastrado com sucesso.
        </div>
        <div class="mb-3">
            <label for="cep">CEP:</label><br />
            <input
                type="text"
                name="cep"
                id="cep"
                v-model="cep"
                class="form-control"
            />
        </div>
        <div class="mb-3">
            <label for="cep">Cidade:</label><br />
            <input
                type="text"
                name="cep"
                id="cep"
                v-model="cidade"
                class="form-control"
            />
        </div>
        <div class="mb-3">
            <label for="cep">Bairro:</label><br />
            <input
                type="text"
                name="cep"
                id="cep"
                v-model="bairro"
                class="form-control"
            />
        </div>
        <div class="mb-3">
            <label for="uf">UF:</label>
            <br />
            <select name="uf" id="uf" class="form-select" v-model="uf">
                <option value="SC">Santa Catarina</option>
                <option value="SP">São Paulo</option>
                <option value="MG">Minas Gerais</option>
                <option value="GO">Goiás</option>
            </select>
        </div>

        <div class="mb-3">
            <input type="submit" value="Enviar" class="btn btn-primary" />
        </div>
    </form>
</template>

<script setup>
import { ref, defineProps, onMounted } from "vue";
import axios from "axios";

const { enderecoId } = defineProps(["enderecoId"]);

const cep = ref("");
const cidade = ref("");
const bairro = ref("");
const uf = ref("");

const error = ref(false);
const success = ref(false);

onMounted(() => {
    if (enderecoId) {
        axios.get(`/api/enderecos/${enderecoId}`).then((res) => {
            const { endereco } = res.data;
            cep.value = endereco.cep;
            cidade.value = endereco.cidade;
            bairro.value = endereco.bairro;
            uf.value = endereco.uf;
        });
    }
});

const submitForm = () => {
    if (enderecoId) {
        axios
            .put(`/api/enderecos/${enderecoId}`, {
                cep: cep.value,
                cidade: cidade.value,
                bairro: bairro.value,
                uf: uf.value,
            })
            .then((res) => {
                error.value = false;
                success.value = true;
            })
            .catch((err) => {
                success.value = false;
                error.value = true;
                console.log(err);
            });
    } else {
        axios
            .post("/api/enderecos", {
                cep: cep.value,
                cidade: cidade.value,
                bairro: bairro.value,
                uf: uf.value,
            })
            .then((res) => {
                error.value = false;
                success.value = true;
                limpaForm();
            })
            .catch((err) => {
                success.value = false;
                error.value = true;
                console.log(err);
            });
    }
};

const limpaForm = () => {
    cep.value = "";
    cidade.value = "";
    bairro.value = "";
    uf.value = "";
};
</script>
