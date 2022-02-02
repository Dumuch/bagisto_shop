<template>
    <div class="col-xl-3 col-lg-4 col-md-5">
        <div class="sidebar-categories">
            <div class="head">Browse Categories</div>
            <ul class="main-categories">
                <li class="common-filter">
                    <form action="#">
                        <ul>
                            <li class="filter-list" v-for="item in categories">
                                <input v-on:click="chooseCategory(item)" class="pixel-radio" type="radio" v-bind:id="item.id" name="category">
                                <label v-bind:for="item.id">{{ item.name }}</label>
                            </li>
                        </ul>
                    </form>
                </li>
                <button v-on:click="resetFilter">Сбросить фильтр</button>
            </ul>
        </div>
    </div>

</template>

<script>
export default {
    name: "Filter",
    props: {
        categories: {
            type: Object
        }
    },
    emits: {
        "choose-category": (value) => typeof value === "object",
    },
    methods: {
        chooseCategory(item) {
            this.$emit("choose-category", item);
        },
        resetFilter() {
            this.chooseCategory(null)
        }
    }
}
</script>

<style scoped>

</style>