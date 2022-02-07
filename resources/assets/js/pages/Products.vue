<template>
    <section class="section-margin--small mb-5">
        <div class="container">
            <div class="row">
                <section-filter
                    :categories="categories"
                    @choose-category="chooseCategory"
                ></section-filter>
                <section-products
                    :products="renderProducts"
                    @choose-search="chooseSearch"
                ></section-products>
            </div>
        </div>
    </section>
</template>

<script>
import Filter from "./products/Filter";
import Products from "./products/Products";

import { apiToLocalStorage } from "../helper/api";

export default {
    name: "Products",
    components: {
        "section-filter": Filter,
        "section-products": Products,
    },
    data() {
        return {
            products: [],
            categories: [],
            activeCategory: null,
            search: null,
        };
    },
    mounted() {
        apiToLocalStorage("allProducts", "products").then(
            (res) => (this.products = res)
        );
        apiToLocalStorage("allCategories", "categories").then(
            (res) => (this.categories = res)
        );
    },

    computed: {
        renderProducts() {
            return this.filteredProducts();
        },
    },

    methods: {
        chooseCategory(category) {
            this.activeCategory = category;
            this.filteredProducts();
        },

        chooseSearch(search) {
            this.search = search;
            this.filteredProducts();
        },

        filteredProducts() {
            let arr = this.products;
            if (this.activeCategory) {
                arr = arr.filter((item) => item.category.id === this.activeCategory.id);
            }
            if (this.search) {
                arr = arr.filter(
                    (item) =>
                        item.name.toLowerCase().indexOf(this.search.toLowerCase()) >= 0
                );
            }
            return arr;
        },
    },
};
</script>
