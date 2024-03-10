<template>
    <div class="container mx-auto pt-5">
        <nav class="pb-3">
            <Link :href="`post/create`"><b>Create post</b></Link>
        </nav>
        <div class="post__block" v-for="post in posts" :key="post.id">
            <h2>{{ post.title }}</h2>
            <p>{{ post.author }}</p>
            <Link :href="`/post/show/${post.id}`">Read more</Link> |
            <Link :href="`/post/edit/${post.id}`">Edit post</Link> |
            <Link :href="`/post/delete/${post.id}`" method="DELETE">Delete post</Link>
        </div>
    </div>
</template>

<script setup>
import { defineProps } from 'vue';
import { Link } from "@inertiajs/vue3";

defineProps({
    posts: Object
});
</script>
