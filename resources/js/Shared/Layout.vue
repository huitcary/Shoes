<template>
   
   <nav class="navbar navbar-expand navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">SHOES</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <Link class="nav-link" :class="{'selected': $page.component=='Home'}" href="/">Home</Link>
        </li>
        <li class="nav-item">
          <Link class="nav-link" :class="{'selected': $page.component=='About'}" href="about">About</Link>
        </li>
       <li class="nav-item">
          <Link class="nav-link" :class="{'selected': $page.component=='Shoe'}" href="shoe">Shoe</Link>
        </li>
        <li class="nav-item">
          <Link class="nav-link" :class="{'selected': $page.component=='Contact'}" href="contact">Contact Us</Link>
        </li>
      </ul>
    </div>
  </div>
</nav>

<section class="container bg-white p-4 rounded-5 my-3 shadow" style="min-height:800px">
<slot/>

</section>
<footer class="text-center mt-2 my-5 text-light">
    Copyright &copy; 2022.All rights reserved.
</footer>
</template>

<script setup>
import {Link} from '@inertiajs/inertia-vue3'
</script>

<style scoped>
section{
    background-color:#fff;
    opacity: 0.6;
}
 .selected{
  color:aquamarine;
  font-weight:bolder;
 }
</style>

