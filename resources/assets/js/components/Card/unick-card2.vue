<template>
    <div class="unick-card">
        <div class="header p-3">
            {{header}}
        </div>
        <div class="p-3">
            <slot/>
        </div>
    </div>
</template>
<script>
export default {
    props: {
        header: {
            type: String
        },
        name
    }
}
</script>
<style lang="scss" scoped>
.unick-card{
    background: white;
    box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    .header{
        background: #50aa48;
        color: white;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }
}
</style>
