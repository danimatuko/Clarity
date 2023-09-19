const path = require("path");

module.exports = {
  entry: "./src/js/index.js", // Your entry point for JavaScript
  output: {
    filename: "main.js", // Output JavaScript file name
    path: path.resolve(__dirname, "dist"), // Output directory
  },
  module: {
    rules: [
      {
        test: /\.js$/,
        exclude: /node_modules/,
        use: {
          loader: "babel-loader", // Add Babel for ES6+ support
        },
      },
    ],
  },
};
