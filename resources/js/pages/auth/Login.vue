<script setup lang="ts">
import {Head, Link, useForm} from '@inertiajs/vue3';

const form = useForm({email: '', password: '', remember: false});
const submit = () => form.post('login', {onFinish: () => form.reset('password')});
</script>

<template>
    <Head title="Login"/>
    <form @submit.prevent="submit" class="mx-auto mt-20 max-w-sm space-y-4">
        <h1 class="text-2xl font-semibold">Login</h1>
    </form>
</template>