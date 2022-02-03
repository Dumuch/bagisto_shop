<template>
    <div class="col-xl-9 col-lg-8 col-md-7">
        <div class="filter-bar d-flex flex-wrap align-items-center">

            <div>
                <div class="input-group filter-bar-search">
                    <input v-model="search" type="text" placeholder="Поиск">
                    <div class="input-group-append">
                        <button type="button"><i class="ti-search"></i></button>
                    </div>
                </div>
            </div>
        </div>

        <section class="lattest-product-area pb-40 category-list">
            <components-spinner v-if="isSpinner"></components-spinner>

            <div class="row">
                <div class="col-md-6 col-lg-4" v-for="product in products">
                    <component-product-card :product="product"></component-product-card>
                </div>
            </div>
        </section>


    </div>
</template>

<script>
import ProductCard from "../../components/catalog/ProductCard";
import Spinner from "../../components/Spinner";

export default {
    name: "Products",
    components: {
        'component-product-card': ProductCard,
        'components-spinner': Spinner
    },
    data() {
        return {
            search: null,
            isSpinner: true
        }
    },
    props: {
        products: {
            type: Object
        }
    },
    emits: {
        "choose-search": (value) => typeof value === "string",
    },
    methods: {
        searchProducts(search) {
            this.$emit("choose-search", search);
        }
    },


    updated() {
        if(this.products && this.isSpinner) {
            this.isSpinner = false
        }
    },
    watch: {
        search() {
            this.searchProducts(this.search)
        }
    }
}
</script>

<style scoped>

</style>