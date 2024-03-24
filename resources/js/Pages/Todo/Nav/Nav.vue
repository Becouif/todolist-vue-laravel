<template>
    <div class="bg-gray-800">
  <nav class="flex items-center justify-between flex-wrap p-6">
    <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
      <div class="text-sm lg:flex-grow">
        <!-- to send the href to a laravel route you need to bind the href  -->
        <a :href="route('todo.index')" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">
          Home
        </a>
        <a :href="route('todo.create')" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">
          Create Todo
        </a>
      </div>
    </div>
  </nav>
</div>
</template>