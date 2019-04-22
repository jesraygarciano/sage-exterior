import Vue from 'vue'

import Gallery from '../components/Gallery/gallery'
import PhotoContainer from '../components/Gallery/components/photo-container'

Vue.component('gallery',Gallery)
Vue.component('photo-container', PhotoContainer)
Vue.mixin({
    methods: {
        showImage(source, title, description){
            let index = this.$children[0].photos.findIndex(i => i.src == source)
            this.$children[0].current_image = index
            this.$refs.product_description.innerHTML = description
            this.$refs.product_name.innerHTML = title
            this.$refs.product_description.innerHTML = description
        }
    }
})