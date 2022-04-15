import { createStore } from "vuex";
import axios from "axios";

export default createStore({
    state() {
        return {
            enderecos: [],
        };
    },
    mutations: {
        setEnderecos(state, enderecos) {
            state.enderecos = enderecos;
        },
    },
    actions: {
        loadEnderecos(context) {
            axios
                .get("/api/enderecos")
                .then((res) => {
                    context.commit("setEnderecos", res.data.enderecos);
                })
                .catch((err) => console.log(err));
        },
    },
});
