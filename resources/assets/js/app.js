require('./bootstrap');

import "../css/bootstrap.min.css";
import "../css/main.css";
import "../css/style.css";

import Vue from "vue";

import router from "./router";
import store from "./store";
import App from "./App.vue";


new Vue({
    store,
    router,
    render: (h) => h(App),
}).$mount("#app");