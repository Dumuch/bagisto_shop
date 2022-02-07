<template>
    <header class="header_area">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <router-link class="navbar-brand logo_h" to="/">
                        <img src="img/logo.png" alt="" />Shop SPA
                    </router-link>
                    <div class="navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto mr-auto">
                            <li
                                v-bind:class="{ active: item.active }"
                                class="nav-item"
                                v-for="item in siteNavList"
                                v-bind:key="item.url"
                            >
                                <router-link class="nav-link" v-bind:to="item.url">{{
                                        item.title
                                    }}</router-link>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
</template>

<script>
export default {
    name: "HeaderComponent",
    props: {
        siteNavList: {
            type: Array,
            required: false,
        },
    },
};
</script>

<style scoped></style>
