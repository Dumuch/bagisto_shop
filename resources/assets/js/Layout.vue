<template>
    <div class="">
        <header-component/>
        <slot/>
        <footer-component/>
    </div>
</template>

<script>
import HeaderComponent from "./components/layout/HeaderComponent";
import FooterComponent from "./components/layout/FooterComponent";

export default {
    name: "Layout",
    components: {
        "header-component": HeaderComponent,
        "footer-component": FooterComponent
    },
}
</script>

<style scoped>

</style>