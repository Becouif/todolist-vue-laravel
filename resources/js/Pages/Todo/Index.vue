<script setup>

import {Head} from "@inertiajs/vue3";
import NavBar from "@/Pages/Todo/Nav/Nav.vue";
import Todo from "@/Components/Todo.vue";
// import head to show head part of the page 

defineProps(['todos']);
</script>


<template>
  <Head title="Home" />

<NavBar />

<!-- i use the component i created that has the table and the columns passing then using props  -->
<div class="mt-6 bg-white">
  <Todo
    v-for="todo in todos"
    :key="todo.id"
    :todo="todo"
  />
</div>





</template>