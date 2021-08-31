<template>
  <div title="Dashboard">
    <!-- <template #header> -->
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">Post</h2>
    <!-- </template> -->
    <Posts :posts="posts" />

  </div>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import Welcome from "@/Jetstream/Welcome.vue";
import Posts from "@/Pages/Posts/Posts";
import Form from "@/Pages/Posts/Form";

export default {
  components: {
    AppLayout,
    Welcome,
    Posts,
    Form,
  },

  props: ["posts"],
};
</script>
