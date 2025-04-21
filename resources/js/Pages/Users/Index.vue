<template>
  <div>
    <h1 class="text-xl font-bold mb-4">Daftar Pengguna</h1>
    <ul>
      <li v-for="user in users" :key="user.id">
        {{ user.name }} - {{ user.email }} <font-awesome-icon :icon="['fas', 'language']" />
      </li>

    </ul>
  </div>
</template>

<script setup>
defineProps({
  users: Array
});

</script>
