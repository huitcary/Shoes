<template>
    
    <h1><b>BRANDS</b></h1>
    <hr>
    
    <div class="d-flex align-content-between">
        <div class="card mb-3" v-for="shoe in shoes" :key="shoe.id">
            <div class="card-header bg-primary">
                <h4><b>BrandName: {{shoe.brand_name}}</b></h4>
            </div>
            <div card="card-body">
                <h5>Founder: {{shoe.founder}}</h5>
                <h5>Description: {{shoe.description}}</h5>
                <h5>Color: {{shoe.color}}</h5>
                <h5>Size: {{shoe.size}}</h5>
            </div>
        </div>
    </div>
</template>

<script setup>
import Layout from '../Shared/Layout.vue'

</script>

<script>
export default {
    layout: Layout,
    props: {
        shoes: Array
    }
    
}
</script>

<style scoped>
.card{
    width: 357px;
}
</style>