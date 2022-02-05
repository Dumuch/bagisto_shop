<template>
    <div class="">
        <div class="site-main">

            <section-products
                title="Популярные товары"
                :products="popularProducts"
                v-if="popularProducts.length > 0"
            />
            <components-spinner v-else></components-spinner>


        </div>
    </div>
</template>
<script>

import Products from './index/Products';
import Spinner from "../components/Spinner";

import {apiToLocalStorage} from "../helper/api";

export default {
    name: 'IndexPage',
    data() {
        return {
            popularProducts: [],
            slider: [],
        };
    },

    components: {
        'section-products': Products,
        'components-spinner': Spinner
    },

    mounted() {
        apiToLocalStorage('productsIndexPage', 'products').then(res => this.popularProducts = res)
    },

    methods: {}

};
</script>
