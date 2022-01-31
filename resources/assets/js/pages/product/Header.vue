<template>
    <section class="blog-banner-area" id="blog">
        <div class="container h-100">
            <div class="blog-banner">
                <div class="text-center">
                    <h1>{{ name }}</h1>
                    <nav aria-label="breadcrumb" class="banner-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Shop Single</li>
                        </ol>
                    </nav>
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