<template>
    <div class="row">
        <slot/>
        <div v-if="photos[0]" class="col-md-6 left-img photo-container" :style="`height: initial; background-image: url(${photos[current_image].src})`" ref="current-image">
            <div class="left" v-if="current_image > 0" @click="current_image--"><i class="fas fa-arrow-left"></i></div>
            <div class="right" v-if="current_image < photos.length - 1" @click="current_image++"><i class="fas fa-arrow-right"></i></div>
        </div>
    </div>
</template>
<script>
export default {
    data: () => ({
        photos: [],
        current_image: 0,
    }),
    mounted(){
        this.photos = this.$children.map(i =>{ return {src: i.source, name: i.name, description: i.description} })
        this.$root.$refs.product_name.innerHTML = this.photos[this.current_image].name
        this.$root.$refs.product_description.innerHTML = this.photos[this.current_image].description
    },
    watch: {
        current_image(){
            if(this.current_image < 0){
                this.current_image = 0;
            }
            if(this.current_image >= this.photos.length){
                this.current_image = this.photos.length - 1
            }

            this.$root.$refs.product_name.innerHTML = this.photos[this.current_image].name
            this.$root.$refs.product_description.innerHTML = this.photos[this.current_image].description
        }
    }

}
</script>
<style lang="scss" scoped>
.left, .right{
    position: absolute;
    width: 50px;
    height: 100%;
    color: white;
    cursor: pointer;
    i{
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translateX(-50%) translateY(-50%);
    }
}
.left{
    left: 0px;
    &:hover{
        background-image: linear-gradient(to right,black, transparent);
    }
}
.right{
    right: 0px;
    &:hover{
        background-image: linear-gradient(to left,black, transparent);
    }
}
</style>
