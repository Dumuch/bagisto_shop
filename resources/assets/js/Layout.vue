<template>
    <div class="">
        <header-component :siteNavList="siteNavList" />
        <slot />
        <footer-component />
    </div>
</template>

<script>
import Header from "./layout/Header";
import Footer from "./layout/Footer";

export default {
    name: "Layout",
    components: {
        "header-component": Header,
        "footer-component": Footer,
    },

    data() {
        return {
            siteNavList: [
                { title: "Главная", url: "/", active: false },
                { title: "Товары", url: "/products", active: false },
            ],
        };
    },

    methods: {
        activeNav() {
            this.siteNavList.map((item) => {
                if (item.url === this.$route.path) {
                    return (item.active = true);
                } else {
                    return (item.active = false);
                }
            });
        },
    },

    mounted() {
        this.activeNav();
    },

    updated() {
        this.activeNav();
    },
};
</script>

<style scoped></style>
