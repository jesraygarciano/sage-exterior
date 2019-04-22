<template>
    <div class="photo-container" :style="`background-image: url(${source});`"></div>
</template>
<script>
export default {
    props: {
        source: {
            type: String,
        },
        name: {
            type: String,
        },
        description: {
            type: String,
        }
    },
    methods: {
        // 
    }
}
</script>
<style lang="scss">
.photo-container{
    width: 100%;
    height: 100px;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}
</style>
