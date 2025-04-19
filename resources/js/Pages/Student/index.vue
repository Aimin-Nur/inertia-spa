<script setup>
    import PublicLayout from "../../Layouts/PublicLayout.vue";
    defineOptions({ layout : PublicLayout })
    defineProps({
        user: Object
    })
</script>

<template>
    <h1>Ini adalah halaman student</h1>
    <h2>Anda Adalah {{ user.name }} Umur Anda {{ user.age }}</h2>
</template>