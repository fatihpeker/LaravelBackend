<template>
    <div>
        <p>Lorem ipsum dolor sit amet.</p>
        <p>@{{product}}</p>
    </div>
</template>

<script>
    export default {
        name: "getProducts",
        data () {
            return {
                product : []
            }
        },
        methods:{
            getAllProducts:function () {
                axios.post('https://localhost:8000/product')
                    .then((response)=>{
                        this.product=response.data;
                    });
            }
        }
    }
</script>

<style scoped>

</style>
