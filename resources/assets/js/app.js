import "../css/bootstrap.min.css";
import "../css/main.css";
import "../css/style.css";

import Vue from "vue";

import router from "./router";

import App from "./App.vue";
import Layout from "./Layout";

Vue.component("layout", Layout)

new Vue({
    router,
    render: (h) => h(App),
}).$mount("#app");