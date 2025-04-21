<script setup lang="ts">
import { library } from "@fortawesome/fontawesome-svg-core";
import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome";
import { fas } from "@fortawesome/free-solid-svg-icons";
library.add(fas);
</script>

<template>
  <Head>
    <title>Inertia - My app</title>
    <meta
      head-key="Latihan Inertia Vue"
      name="Program Sederhana Inertia Vue.js dan Laravel."
      content="Belajar Mengenai Framework Vue.js dan Inertia."
    />
  </Head>
  <h1>Hello Dunia <font-awesome-icon :icon="['fas', 'language']" /></h1>
</template>
