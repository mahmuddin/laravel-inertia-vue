<template>
    <div class="post__content">
        <h2>{{ post.title }}</h2>
        <p>{{ post.title }}</p>
        <div>{{ post.content }}</div>
    </div>
</template>


<script setup>
import { defineProps } from 'vue';

defineProps({
    post: Object
})
</script>
