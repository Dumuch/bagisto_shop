<template>
    <div class="product_image_area">

        <div class="container">
            <div class="row s_product_inner">
                <div class="col-lg-6">
                    <div class="owl-carousel owl-theme s_Product_carousel">
                        <div class="single-prd-item" v-for="image in product.images" :key="image.id">
                            <img class="img-fluid" v-bind:src="image.large_image_url" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="s_product_text">
                        <h2>{{ product.formated_price }}</h2>
                        <ul class="list">
                            <li><a class="active" href="#"><span>Категория</span>: {{ product.category.name }}</a></li>
                            <li>
                                <a href="#"><span>Наличие</span>:
                                    <template v-if="product.in_stock">В наличии</template>
                                    <template v-else>Нет в наличии</template>
                                </a>
                            </li>
                        </ul>
                        <div class="" v-html="product.short_description"></div>
                        <div class="mt-5">
                            <button class="button primary-btn" href="#">Заказать товар</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Info",
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