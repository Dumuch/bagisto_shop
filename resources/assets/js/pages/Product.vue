<template>
    <div class="" >
        <template v-if="product">
            <section-header :name="product.name"></section-header>
            <section-info :product="product"></section-info>
            <section-description :product="product"></section-description>
        </template>
        <components-spinner v-else></components-spinner>

        <section class="related-product-area section-margin--small mt-0">
            <div class="container">
                <div class="section-intro pb-60px">
                    <p>Popular Item in the market</p>
                    <h2>Top <span class="section-intro__style">Product</span></h2>
                </div>
                <div class="row mt-30">
                    <div class="col-sm-6 col-xl-3 mb-4 mb-xl-0">
                        <div class="single-search-product-wrapper">
                            <div class="single-search-product d-flex">
                                <a href="#"><img src="img/product/product-sm-1.png" alt=""></a>
                                <div class="desc">
                                    <a href="#" class="title">Gray Coffee Cup</a>
                                    <div class="price">$170.00</div>
                                </div>
                            </div>
                            <div class="single-search-product d-flex">
                                <a href="#"><img src="img/product/product-sm-2.png" alt=""></a>
                                <div class="desc">
                                    <a href="#" class="title">Gray Coffee Cup</a>
                                    <div class="price">$170.00</div>
                                </div>
                            </div>
                            <div class="single-search-product d-flex">
                                <a href="#"><img src="img/product/product-sm-3.png" alt=""></a>
                                <div class="desc">
                                    <a href="#" class="title">Gray Coffee Cup</a>
                                    <div class="price">$170.00</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xl-3 mb-4 mb-xl-0">
                        <div class="single-search-product-wrapper">
                            <div class="single-search-product d-flex">
                                <a href="#"><img src="img/product/product-sm-4.png" alt=""></a>
                                <div class="desc">
                                    <a href="#" class="title">Gray Coffee Cup</a>
                                    <div class="price">$170.00</div>
                                </div>
                            </div>
                            <div class="single-search-product d-flex">
                                <a href="#"><img src="img/product/product-sm-5.png" alt=""></a>
                                <div class="desc">
                                    <a href="#" class="title">Gray Coffee Cup</a>
                                    <div class="price">$170.00</div>
                                </div>
                            </div>
                            <div class="single-search-product d-flex">
                                <a href="#"><img src="img/product/product-sm-6.png" alt=""></a>
                                <div class="desc">
                                    <a href="#" class="title">Gray Coffee Cup</a>
                                    <div class="price">$170.00</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xl-3 mb-4 mb-xl-0">
                        <div class="single-search-product-wrapper">
                            <div class="single-search-product d-flex">
                                <a href="#"><img src="img/product/product-sm-7.png" alt=""></a>
                                <div class="desc">
                                    <a href="#" class="title">Gray Coffee Cup</a>
                                    <div class="price">$170.00</div>
                                </div>
                            </div>
                            <div class="single-search-product d-flex">
                                <a href="#"><img src="img/product/product-sm-8.png" alt=""></a>
                                <div class="desc">
                                    <a href="#" class="title">Gray Coffee Cup</a>
                                    <div class="price">$170.00</div>
                                </div>
                            </div>
                            <div class="single-search-product d-flex">
                                <a href="#"><img src="img/product/product-sm-9.png" alt=""></a>
                                <div class="desc">
                                    <a href="#" class="title">Gray Coffee Cup</a>
                                    <div class="price">$170.00</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xl-3 mb-4 mb-xl-0">
                        <div class="single-search-product-wrapper">
                            <div class="single-search-product d-flex">
                                <a href="#"><img src="img/product/product-sm-1.png" alt=""></a>
                                <div class="desc">
                                    <a href="#" class="title">Gray Coffee Cup</a>
                                    <div class="price">$170.00</div>
                                </div>
                            </div>
                            <div class="single-search-product d-flex">
                                <a href="#"><img src="img/product/product-sm-2.png" alt=""></a>
                                <div class="desc">
                                    <a href="#" class="title">Gray Coffee Cup</a>
                                    <div class="price">$170.00</div>
                                </div>
                            </div>
                            <div class="single-search-product d-flex">
                                <a href="#"><img src="img/product/product-sm-3.png" alt=""></a>
                                <div class="desc">
                                    <a href="#" class="title">Gray Coffee Cup</a>
                                    <div class="price">$170.00</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
import Header from "./product/Header";
import Info from "./product/Info";
import Description from "./product/Description";
import Spinner from "../components/Spinner"
import {apiToLocalStorageArrProducts} from "../helper/api";

export default {
    name: "ProductPage",
    data() {
        return {
            product: null,
        }
    },

    components: {
        'section-header': Header,
        'section-info': Info,
        'section-description': Description,
        'components-spinner': Spinner
    },
    mounted(){
        apiToLocalStorageArrProducts(this.$route.params.id).then(r => this.product = r)
    },
}
</script>
