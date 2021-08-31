<template>
   <div v-for="post in posts" :key="post.id">
        <Post 
            @delete-post="$emit('delete-post', post.id)" 
            @edit-post="$emit('edit-post', post.id)" 
            :post="post"
        />
    </div> 
</template>

<script>
   import Post from './Post' 
   export default {
       name: 'Posts',
       props: {
           posts: Array
    },
    components:{
        Post,
    },
    emits: ['delete-post', 'edit-post'],
   }
</script>
