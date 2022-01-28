<template>
    <div class="">
        <header-component/>
        <component :is="component"></component>
        <footer-component/>
    </div>
</template>

<script>
import HeaderComponent from "./components/HeaderComponent";
import FooterComponent from "./components/FooterComponent";

export default {
    name: "Layout",
    components: {
        "header-component": HeaderComponent,
        "footer-component": FooterComponent
    },
    props: {
        component: {
            type: Object,
            required: true
        }
    },
}
</script>

<style scoped>

</style>