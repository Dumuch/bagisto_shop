<template>
    <div class="card text-center card-product">
        <div class="card-product__img">
            <img class="card-img" v-bind:src="product.base_image.large_image_url" alt="">
        </div>
        <div class="card-body">
            <p>Категория</p>
            <h4 class="card-product__title">
                <router-link :to="{ name: 'ProductPage', params: { id: product.id }}">{{ product.name }}</router-link>
            </h4>
            <p class="card-product__price">{{ product.formated_price }}</p>
        </div>
    </div>
</template>

<script>
export default {
    name: "ProductCard",
    props: {
        product: {
            type: Object,
            required: true
        }
    }
}
</script>

<style scoped>

</style>