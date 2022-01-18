const mix = require("laravel-mix");

const path = require("path");

const root = (prefix = "") =>
  path.resolve(__dirname, path.join("resources/assets", prefix));

const resolve = (pathname = "", alias = "") => (
  console.log({
    ["@" + (alias.length === 0 ? pathname.replace(/^.*[\\\/]/, "") : alias)]:
      path.resolve(__dirname, path.join(root("app"), pathname)),
  }),
  {
    ["@" + (alias.length === 0 ? pathname.replace(/^.*[\\\/]/, "") : alias)]:
      path.resolve(__dirname, path.join(root("app"), pathname)),
  }
);
/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.webpackConfig({
  devtool: "inline-source-map",

  resolve: {
    alias: {
      ...resolve("app"),
      ...resolve("views"),
      ...resolve("store"),
      ...resolve("", "base"),
      ...resolve("components"),
      ...resolve("shared"),
      ...resolve("shared/plugins"),
      ...resolve("shared/services"),
      ...resolve("shared/styles"),
    },
  },
});

mix
  .options({
    extractVueStyles: "public/css/app.css",
    processCssUrls: true,
    uglify: {
      compress: false,
      mangle: false,
    },
    uglifyCss: false,
    postCss: [require("autoprefixer")],
    clearConsole: false,
  })
  .ts("resources/ts/app.ts", "public/js")
  .vue({ version: 3 })
  .postCss("resources/css/app.css", "public/css", [require("tailwindcss")])
  .sourceMaps();
