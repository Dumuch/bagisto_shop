<template>
    <section class="section-margin calc-60px">
        <div class="container">
            <div class="section-intro pb-60px">
                <p>Самое продаваемое</p>
                <h2>
                    {{ arrTitle[0] }}
                    <span class="section-intro__style">{{ arrTitle[1] }}</span>
                </h2>
            </div>
            <div class="row">
                <div
                    class="col-md-6 col-lg-4 col-xl-3"
                    v-for="product in products"
                    :key="product.id"
                >
                    <product-card :product="product"></product-card>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
import ProductCard from '../../components/catalog/ProductCard';

export default {
    name: 'PopularProduct',
    props: {
        products: {
            type: Object,
            required: true,
        },
        title: {
            type: String,
        },
    },

    components: {
        'product-card': ProductCard,
    },
    computed: {
        arrTitle() {
            const arr = this.title.split(' ');
            const importantStr = arr.pop();
            return [arr.join(' '), importantStr];
        },
    },
};
</script>
