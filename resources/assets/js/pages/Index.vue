<template>
    <div class="">
        <div class="site-main">
            <!--================ Hero banner start =================-->
            <section-banner></section-banner>
            <!--================ Hero banner start =================-->

            <!--================ Hero Carousel start =================-->
            <section-slider />
            <!--================ Hero Carousel end =================-->

            <!-- ================ trending product section start ================= -->
            <section-products
                title="Популярные товары"
                :products="popularProducts"
                v-if="popularProducts.length > 0"
            ></section-products>

            <!-- ================ trending product section end ================= -->

            <!-- ================ offer section start ================= -->
            <section
                class="offer"
                id="parallax-1"
                data-anchor-target="#parallax-1"
                data-300-top="background-position: 20px 30px"
                data-top-bottom="background-position: 0 20px"
            >
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5">
                            <div class="offer__content text-center">
                                <h3>Up To 50% Off</h3>
                                <h4>Winter Sale</h4>
                                <p>Him she'd let them sixth saw light</p>
                                <a
                                    class="button button--active mt-3 mt-xl-4"
                                    href="#"
                                    >Shop Now</a
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ================ offer section end ================= -->

            <!-- ================ Best Selling item  carousel ================= -->
            <section-products
                title="Самые продаваемые товары"
                :products="popularProducts"
                v-if="popularProducts.length > 0"
            ></section-products>
            <!-- ================ Best Selling item  carousel end ================= -->

            <!-- ================ Blog section start ================= -->
            <section-blog></section-blog>
            <!-- ================ Blog section end ================= -->

            <!-- ================ Subscribe section start ================= -->
            <section class="subscribe-position">
                <div class="container">
                    <div class="subscribe text-center">
                        <h3 class="subscribe__title">
                            Get Update From Anywhere
                        </h3>
                        <p>
                            Bearing Void gathering light light his eavening unto
                            dont afraid
                        </p>
                        <div id="mc_embed_signup">
                            <form
                                target="_blank"
                                action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                method="get"
                                class="subscribe-form form-inline mt-5 pt-1"
                            >
                                <div class="form-group ml-sm-auto">
                                    <input
                                        class="form-control mb-1"
                                        type="email"
                                        name="EMAIL"
                                        placeholder="Enter your email"
                                        onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Your Email Address '"
                                    />
                                    <div class="info"></div>
                                </div>
                                <button
                                    class="button button-subscribe mr-auto mb-1"
                                    type="submit"
                                >
                                    Subscribe Now
                                </button>
                                <div style="position: absolute; left: -5000px">
                                    <input
                                        name="b_36c4fd991d266f23781ded980_aefe40901a"
                                        tabindex="-1"
                                        value=""
                                        type="text"
                                    />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ================ Subscribe section end ================= -->
        </div>
    </div>
</template>
<script>

import Slider from './index/Slider';
import Products from './index/Products';
import Banner from './index/Banner';
import Blog from './index/Blog';

export default {
    name: 'IndexPage',
    yesterday: new Date(Date.now()-86400000),
    data() {
        return {
            popularProducts: [],
        };
    },

    components: {
        'section-slider': Slider,
        'section-products': Products,
        'section-banner': Banner,
        'section-blog': Blog,
    },
    async mounted() {
        const obProducts = JSON.parse(localStorage.getItem('productsIndexPage'))

        if(!obProducts || obProducts.time < this.yesterday) {
            this.popularProducts = await fetch('/api/products/')
                .then((r) => r.json())
                .then((r) => r.data);
            localStorage.setItem('productsIndexPage', JSON.stringify({'products': this.popularProducts, 'time': new Date()}))
        } else {
            this.popularProducts = obProducts.products
        }
    },

};
</script>
