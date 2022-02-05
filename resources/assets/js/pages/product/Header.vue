<template>
    <section class="blog-banner-area" id="blog">
        <div class="container h-100">
            <div class="blog-banner">
                <div class="text-center">
                    <h1>{{ name }}</h1>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: "Header",
    props: {
        name: {
            type: String,
            required: true
        }
    }
}
</script>

<style scoped>

</style>