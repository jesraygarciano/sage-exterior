let mix = require('laravel-mix');
const path = require('path')
require('laravel-mix-purgecss');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.setPublicPath('dist')
   .js('resources/assets/js/app.js', 'js/')
   .extract([
     'babel-polyfill',
     'vue'
   ])
   .sass('resources/assets/sass/app.scss', 'css/')
   .options({
     processCssUrls: false,
     postCss: [ require('tailwindcss')('./tailwind.js') ],
   })
   .purgeCss()

if (mix.inProduction()) {
  mix.version()
}

mix.options({
  hmrOptions: {
      host: 'localhost',
      port: 8087
  }
})

mix.webpackConfig({
  plugins: [
    // new BundleAnalyzerPlugin()
  ],
  resolve: {
    extensions: ['.js', '.json', '.vue'],
    alias: {
      '~': path.join(__dirname, './resources/js'),
      '@': path.join(__dirname, './')
    }
  },
  output: {
    chunkFilename: 'js/[name].[chunkhash].js',
    publicPath: mix.config.hmr ? '//localhost:8080' : '/'
  }
})
