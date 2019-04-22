<template>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-4"><div class="btn btn-success">hello</div></div>
                <div class="col-md-4"><div class="btn btn-success">hello</div></div>
                <div class="col-md-4"><div class="btn btn-success">hello</div></div>
            </div> 
        </div>
    </div>
</template>

<script>
export default {
    mounted() {
        this.helloWorld();
    },
    data() {
        return {
            //
        }
    },
    methods: {
        helloWorld(){
            console.log('Hello, World!');
        }
    }
}
</script>
