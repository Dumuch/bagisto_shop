<template>
    <div class="">
        <template v-if="product">
            <section-header :name="product.name"></section-header>
            <section-info :product="product"></section-info>
        </template>
        <components-spinner v-else></components-spinner>
    </div>
</template>

<script>
import Header from "./product/Header";
import Info from "./product/Info";
import Spinner from "../components/Spinner";
import { apiToLocalStorageArrProducts } from "../helper/api";

export default {
    name: "ProductPage",
    data() {
        return {
            product: null,
        };
    },

    components: {
        "section-header": Header,
        "section-info": Info,
        "components-spinner": Spinner,
    },
    mounted() {
        apiToLocalStorageArrProducts(this.$route.params.id).then(
            (r) => (this.product = r)
        );
    },
};
</script>
