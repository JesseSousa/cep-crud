import { createRouter, createWebHistory } from "vue-router";
import Home from "./pages/Home.vue";
import FormNew from "./pages/FormNew.vue";
import FormEdit from "./pages/FormEdit.vue";

const routes = [
    {
        path: "/",
        component: Home,
    },
    {
        path: "/new",
        component: FormNew,
    },
    {
        path: "/edit/:id",
        component: FormEdit,
    },
];

export default createRouter({
    history: createWebHistory(),
    routes,
});
