<script setup>
// component i am using to create the todo to show 
import dayjs from "dayjs";
import relativeTime from "dayjs/plugin/relativeTime";
dayjs.extend(relativeTime);
defineProps(['todo']);

</script>

<template>

  <div class="max-w-screen-lg mx-auto mt-2">
  
<div class="flex flex-col">
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                No
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Todo
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                created at
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                -
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                -
              </th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
            <tr>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">{{ todo.id }}</div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">{{ todo.todo }}</div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">{{ dayjs(todo.created_at).fromNow() }}</div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <a :href="route('todo.edit', todo.id)"  class="bg-teal-700 py-2 px-4 text-sm text-white">Edit</a>
                <!-- <button >Edit</button> -->
                
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <a :href="route('todo.delete', todo.id)" class="bg-teal-700 py-2 px-4 text-sm text-white">Delete</a>
                
              </td>
            </tr>
            <!-- More rows... -->
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</div>
</template>