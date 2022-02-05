<template>
    <div class="">
        <header-component :siteNavList="siteNavList"/>
        <slot/>
        <footer-component/>
    </div>
</template>

<script>
import HeaderComponent from "./layout/HeaderComponent";
import FooterComponent from "./layout/FooterComponent";

export default {
    name: "Layout",
    components: {
        "header-component": HeaderComponent,
        "footer-component": FooterComponent
    },

    data() {
        return {
            siteNavList: [
                {title: 'Главная', url: '/', active: false},
                {title: 'Товары', url: '/products', active: false}
            ],

        }
    },

    methods: {
        activeNav() {
            this.siteNavList.map((item) => {
                if (item.url === this.$route.path) {
                    return item.active = true;
                } else {
                    return item.active = false;
                }
            })
        }
    },

    mounted() {
        this.activeNav()
    },

    updated() {
        this.activeNav()
    }


}
</script>

<style scoped>

</style>