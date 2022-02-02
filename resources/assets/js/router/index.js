import Vue from "vue";
import Router from "vue-router";

import IndexPage from "../pages/Index"
import ProductPage from "../pages/Product"
import ProductsPage from "../pages/Products"

Vue.use(Router);
const router = new Router({
    mode: "history",
    routes: [
        {
            path: "/",
            name: "IndexPage",
            component: IndexPage,
        },
        {
            path: "/product/:id",
            name: "ProductPage",
            component: ProductPage,
        },
        {
            path: "/products/",
            name: "ProductsPage",
            component: ProductsPage,
        },
    ],
});

export default router;
