import Vue from "vue";
import Router from "vue-router";


import Layout from "../Layout"
import IndexPage from "../pages/Index"
import ProductPage from "../pages/Product"


Vue.use(Router);

// const ifAuthenticated = (to, from, next) => {
//     const currentUser = firebase.auth().currentUser;
//
//     if (!currentUser) {
//         next("login");
//         return;
//     } else next();
// };

const router = new Router({
    mode: "history",
    routes: [
        {
            path: "/",
            name: "IndexPage",
            component: Layout,
            props: { component: IndexPage }
        },
        {
            path: "/product",
            name: "ProductPage",
            component: Layout,
            props: { component: ProductPage }
        },
        // {
        //     path: "/register",
        //     name: "Register",
        //     component: Register,
        // },
        // {
        //     path: "/dashboard",
        //     name: "Dashboard",
        //     component: Dashboard,
        //     beforeEnter: ifAuthenticated,
        // },
        // {
        //     path: "/about",
        //     name: "About",
        //     component: About,
        //     beforeEnter: ifAuthenticated,
        // },
    ],
});

export default router;
