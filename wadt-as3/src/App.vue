<script setup>
// This starter template is using Vue 3 <script setup> SFCs
// Check out https://v3.vuejs.org/api/sfc-script-setup.html#sfc-script-setup
import HelloWorld from "./components/HelloWorld.vue";
</script>

<template>
    <div class="w-1/2 mx-auto">
      <span class="block sm:hidden ">Mobile View</span><span class="hidden sm:block">PC/Tablet View</span>
    </div>
    <div
      class="
        box-border
        rounded-md
        bg-gradient-to-b
        sm:bg-gradient-to-r
        from-blue-500
        to-red-300
        hover:from-red-300
        hover:to-blue-500

        pt-0
        sm:pt-5
        pb-5
        w-3/5
        sm:w-2/5
        text-center
        sm:text-left
        mx-auto
        flex-none
        sm:flex
      "
    >
      <img
        src="./assets/studentimg.png"
        class="box-border w-60 pl-0 sm:pl-10 mx-auto rounded-md sm:mx-0"
      />
      <div class="flex-auto text-white pl-0 sm:pl-10">
        <h1 class="text-3xl font-bold underline">
          Nur Alif Saifullah!
        </h1>
        <br>
        <span>Student Id: 20FTT1464</span><br>
        <span>Student Group: DWDT06</span><br>
        <span>My hobby is to build pc and keyboards</span>
      </div>
      
    </div>
</template>


<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
