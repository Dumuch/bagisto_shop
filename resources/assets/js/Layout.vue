<template>
    <div class="">
        <header-component/>
        <component :is="component"></component>
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
    props: {
        component: {
            type: Object,
            required: true
        }
    },

    beforeRouteEnter(to, from, next) {
        console.log(to, from, next)
        setTimeout(()=>next(), 1000)
    },
}
</script>

<style scoped>

</style>