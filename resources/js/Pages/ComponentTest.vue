<script setup>
    import GuestLayout from '@/Layouts/GuestLayout.vue'
    import Label from '@/Components/InputLabel.vue'
    import Input from '@/Components/TextInput.vue'
</script>

<template>
    <GuestLayout>
        <Label value="Title">Title</Label>
        <Input modelValue="Initial Value"></Input>
    </GuestLayout>
</template>
