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
                        <h3></h3>
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
                        <div class="product_count" style="display: flex; align-items: center">
                            <label for="qty">Количество:</label>
                            <div class="mr-3" style="position:relative; width: fit-content">
                                <button style="background-color: red"
                                        onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
                                        class="increase items-count" type="button"><i class="ti-angle-left"></i>
                                </button>
                                <input type="text" name="qty" id="sst" size="2" maxlength="12" value="1"
                                       title="Quantity:" class="input-text qty">
                                <button style="background-color: red"
                                        onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
                                        class="reduced items-count" type="button"><i class="ti-angle-right"></i>
                                </button>

                            </div>
                            <a class="button primary-btn" href="#">Add to Cart</a>
                        </div>
                        <div class="card_area d-flex align-items-center">
                            <a class="icon_btn" href="#"><i class="lnr lnr lnr-diamond"></i></a>
                            <a class="icon_btn" href="#"><i class="lnr lnr lnr-heart"></i></a>
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