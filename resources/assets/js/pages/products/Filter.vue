<template>
    <div class="col-xl-3 col-lg-4 col-md-5">
        <div class="sidebar-categories">
            <div class="head">Категории</div>
            <ul class="main-categories">
                <li class="common-filter">
                    <form action="#">
                        <ul>
                            <li
                                class="filter-list"
                                v-for="item in categories"
                                v-bind:key="item.id"
                            >
                                <input
                                    v-on:click="chooseCategory(item)"
                                    class="pixel-radio"
                                    type="radio"
                                    v-bind:id="item.id"
                                    name="category"
                                />
                                <label v-bind:for="item.id">{{ item.name }}</label>
                            </li>
                        </ul>
                    </form>
                </li>
            </ul>
            <button
                v-bind:disabled="isDisabled"
                class="btn button primary-btn mt-3 mb-3"
                v-on:click="resetFilter"
            >
                очистить
            </button>
        </div>
    </div>
</template>

<script>
export default {
    name: "FilterComponents",
    data() {
        return {
            isDisabled: true,
        };
    },
    props: {
        categories: {
            type: Array,
        },
    },
    emits: {
        "choose-category": (value) => typeof value === "object" ?? null,
    },
    methods: {
        chooseCategory(item) {
            this.isDisabled = false;
            this.$emit("choose-category", item);
        },
        resetFilter() {
            this.chooseCategory(null);
            document.querySelector('input[type="radio"]:checked').checked = false;
            this.isDisabled = true;
        },
    },
};
</script>

<style scoped></style>
