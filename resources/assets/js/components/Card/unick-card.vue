<template>
    <div class="unick-card p-3 text-center">
        <div class="pt-5 pb-3">
            <div class="unick-photo" :style="`background-image: url(${picture_src})`"></div>
        </div>
        <div class="text-secondary border-bottom">
            <p class="mb-3" id="admin-name-yo">{{name}}</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut</p>
        </div>
        <br>
        <a class="brwn-btn" href="#">Read Blogs</a>
    </div>
</template>
<script>
export default {
    props: {
        picture_src: {
            type: String
        },
        name
    }
}
</script>
<style lang="scss" scoped>
#admin-name-yo{
    font-size: 1.2rem;
    text-transform: Capitalize;
}
.unick-card{
    background: white;
    box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.33);
    .unick-photo{
        display: inline-block;
        height: 50px;
        width: 50px;
        border-radius: 50%;
        box-shadow: 0 -2px 1px 0 rgba(0, 0, 0, .1);
        border: 3px solid white;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }
}
</style>
