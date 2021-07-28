import { createApp } from "vue";
import vuetify from "./plugins/vuetify";
import App from "./App.vue";
import router from "./router";
import store from "./store";
 require('./assets/css/dist/style.css');
//  require('./assets/js/script.js');

const app = createApp(App);
app.use(router);
app.use(store);
app.use(vuetify);

app.mount("#app");

