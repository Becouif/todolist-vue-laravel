<script setup>
import Nav from "@/Pages/Todo/Nav/Nav.vue";
import { useForm, Head } from "@inertiajs/vue3";
import InputError from "@/Components/InputError.vue";

const props = defineProps(['todo']);

// we use props dot the name in the defineProps that was being sent from the controller 
const form = useForm({
  todo: props.todo.todo
});
</script>
<template>
  <Head title="edit" />
  <Nav />
  <div class="p-6 max-w-sm mx-auto bg-white rounded-xl shadow-md flex items-center space-x-4">
  <div class="flex-1">
    <form @submit.prevent="form.put(route('todo.update', todo.id),{onSuccess: () => true })">
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="message">
          Message
        </label>
        <textarea
         v-model="form.todo"
         class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
         id="message"
          type="text"
         ></textarea>
         <InputError :message="form.errors.todo" class="mt-2" />
      </div>
      <div class="flex items-center justify-between">
        <button class="bg-teal-700 hover:bg-teal-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
          Submit
        </button>
      </div>
    </form>
  </div>
</div>
</template>