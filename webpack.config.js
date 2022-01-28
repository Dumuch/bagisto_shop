const { VueLoaderPlugin } = require("vue-loader");
const path = require("path");

module.exports = {
    entry: {
        app: "./resources/assets/js/app.js"
    },
    output: {
        path: path.resolve(__dirname, "./public/js/"),
    },
    module: {
        rules: [
            {
                test: /\.js$/,
                exclude: /node_modules/,
                use: {
                    loader: "babel-loader",
                },
            },
            {
                test: /\.vue$/,
                loader: "vue-loader",
            },
            {
                test: /\.css$/,
                use: [
                    'style-loader','css-loader'

                ],
            },
        ],
    },
    plugins: [
        new VueLoaderPlugin(),
    ],
    resolve: {
        alias: {
            vue$: "vue/dist/vue.runtime.esm.js",
        },
        extensions: ["*", ".js", ".vue", ".json"],
    },
};