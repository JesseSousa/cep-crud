import { createApp } from "vue";
import router from "./routes";
import store from "./store";
import App from "./App.vue";
import "bootstrap/dist/css/bootstrap.min.css";

import "./bootstrap";

const app = createApp(App);
app.use(router);
app.use(store);

app.mount("#root");
