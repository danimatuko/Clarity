const path = require("path");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");

const config = {
  entry: { main: ["./src/js/index.js", "./src/sass/main.scss"] },

  output: {
    path: path.resolve(__dirname, "dist"),
    filename: "[name].min.js",
  },
  devtool: "source-map",

  module: {
    rules: [
      {
        test: /\.scss$/,
        use: [MiniCssExtractPlugin.loader, "css-loader", "sass-loader"],
      },
      {
        test: /\.js$/,
        use: "babel-loader",
        exclude: /node_modules/,
      },
    ],
  },
  plugins: [new MiniCssExtractPlugin()],
  watch: true,
};

module.exports = config;
