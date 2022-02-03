<template>
    <div class="">
        <div class="site-main">

            <section-slider
                v-if="slider.length > 0"
                :slider="slider"
            />

            <components-spinner v-else></components-spinner>


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

import Slider from './index/Slider';
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
        'section-slider': Slider,
        'section-products': Products,
        'components-spinner': Spinner
    },

    mounted() {
        apiToLocalStorage('productsIndexPage', 'products').then(res => this.popularProducts = res )
        apiToLocalStorage('sliderIndexPage', 'sliders').then(res => this.slider = res )
    },

    methods: {}

};
</script>
