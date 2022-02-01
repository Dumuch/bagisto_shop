import Vue from "vue";
import Router from "vue-router";

import IndexPage from "../pages/Index"
import ProductPage from "../pages/Product"

Vue.use(Router);
const router = new Router({
    mode: "history",
    routes: [
        {
            path: "/",
            name: "IndexPage",
            component: IndexPage,
            // props: { component: IndexPage },
        },
        {
            path: "/product/:id",
            name: "ProductPage",
            component: ProductPage,
            // props: { component: ProductPage },
        },
    ],
});

export default router;
