<template>
    <section class="section-margin mt-0">
        <div class="owl-carousel owl-theme hero-carousel">
            <div class="hero-carousel__slide" v-for="obSlider in slider" :key="obSlider.id" >
                <img src="obSlider.image_url" alt="" class="img-fluid">
                <a href="" class="hero-carousel__slideOverlay">
                    <h3>{{ obSlider.title }}</h3>
                    <div class="" v-html="obSlider.content"></div>
                </a>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: "slider",
    props: {
        slider: {
            type: Object,
            required: true
        }
    }
}
</script>

<style scoped>

</style>