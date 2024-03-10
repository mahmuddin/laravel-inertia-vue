<template>
    <div class="post__create">
        <div class="pb-3">
            <Link :href="`/`">Back</Link>
        </div>
        <form @submit.prevent="form.post('/post')">
            <!-- title -->
            <div>
                <label for="title">Title</label>
                <input type="text" v-model="form.title" />
                <div v-if="form.errors.title">{{ form.errors.title }}</div>
            </div>
            <!-- author -->
            <div>
                <label for="author">Author</label>
                <input type="text" v-model="form.author" />
                <div v-if="form.errors.author">{{ form.errors.author }}</div>
            </div>
            <!-- content -->
            <div>
                <label for="content">Content</label>
                <textarea v-model="form.content"></textarea>
                <div v-if="form.errors.content">{{ form.errors.content }}</div>
            </div>
            <div>
                <input type="submit" value="Create new post" />
            </div>
        </form>
    </div>
</template>

<script setup>
import { Link, useForm } from '@inertiajs/vue3';

const form = useForm({
    title: "",
    author: "",
    content: "",
})
</script>
