<script setup>
import { Link } from '@inertiajs/vue3'
</script>

<template>
  <main>
    <header style="background-color: antiquewhite; padding: 20px;">
      <Link style="display: inline; margin-right: 10px;" href="/">Home</Link>
      <Link style="display: inline; margin-right: 10px;" href="/users">User</Link>
    </header>
    <article>
      <slot />
    </article>
  </main>
</template>