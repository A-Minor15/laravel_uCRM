<script setup>
    import { Link } from '@inertiajs/inertia-vue3';
</script>

<template>
    This is Inertia test.<br>
    <a href="/">This is a tag.</a><br>
    <Link href="/">This is link.</Link><br>
    <Link :href="route('inertia.index')">Confirm to named route.</Link><br>
    <Link :href="route('inertia.show', { id: 50 })">Test of route paramater.</Link>
</template>
