import { createApp } from "vue";
import router from "./routes";
import App from "./App.vue";

import "./bootstrap";

const app = createApp(App);
app.use(router);

app.mount("#root");
