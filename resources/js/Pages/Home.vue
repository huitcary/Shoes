<template>
 <h1><strong> Home </strong></h1>
 <hr>
<main class="mt-5">
    <img src="/img/img1.jpg" alt="" />
  <p>
    <strong class="title"> <h1> SHOES </h1> <hr>
        Shoes not only help our feet to heal but can also aid in support and stability of our foot. 
        Not all feet are perfect, so properly fitting shoes can help align your feet, ankles,
         knees, hips and back to correct your gait and improve posture.
    </strong>
</p>
</main>
</template>

<script setup>
import { ref } from 'vue'
import Layout from '../Shared/Layout.vue'
</script>

<script>
export default {
    layout: Layout
}
</script>

<style scoped>
main {
display: flex;
justify-content: space-between;
}
img {
width: 60%;
height: 610px;
border-radius: 5px;
}
p {
width: 40%;
padding: 5px;
background: rgb(54, 27, 46);
height: 610px;
border-radius: 5px;
margin-left: 5px;

}
.title {
font-size: 27px;
text-align: justify;
color: #e8f40a;
}
</style>