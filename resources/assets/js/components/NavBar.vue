<template>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mt-4">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="#">
                <img src="/images/logo/w_sotorie_logo.png" alt="Kinki Logo">
            </a>
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="#">TOP <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">ABOUT</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">GALLERY</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">SHOP</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">BLOG</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">CONTACT</a>
            </li>
            </ul>
            <v-button btnClass="grn-btn3">+1(023) 456 789</v-button>
        </div>
    </nav>
</template>

<script>
import Button from '@/components/top/Button.vue'
export default {
    components:{
        'v-button' : Button
    }
}
</script>

<style lang="scss" scoped>
img{
    max-height: 40px;
    max-width: 100%;
}
ul{
    margin-left: 20rem;
    margin-right: 4rem;
}
nav{
    padding-left: 4rem;
    padding-right: 4rem !important;
}
li a{
    color: #ffffff;
    font-size: 12px;
    margin-right: 1rem;
    font-weight: bold;
}
.navbar{
    background: transparent !important;
}
.navbar-toggler-icon{
    color: #ffffff !important;
}
</style>

