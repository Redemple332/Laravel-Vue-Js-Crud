<template>
  <app-layout title="Dashboard">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">Post</h2>
    </template>
    <div class="w-full">
      <h1>Add Post Form</h1>
      <form
        @submit.prevent="isUpdateMode ? updatePost() : addPost()"
        class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4"
      >
        <div class="mb-4">
          <label
            class="block text-gray-700 text-sm font-bold mb-2"
            for="username"
          >
            Title
          </label>
          <input
            v-model="form.title"
            type="text"
            class="
              shadow
              appearance-none
              border
              rounded
              w-full
              py-2
              px-3
              text-gray-700
              leading-tight
              focus:outline-none
              focus:shadow-outline
            "
          />
          <div v-if="form.errors.title">{{ form.errors.title }}</div>
        </div>

        <div class="mb-4">
          <label
            class="block text-gray-700 text-sm font-bold mb-2"
            for="username"
          >
            Content
          </label>
          <textarea
            v-model="form.content"
            class="
              shadow
              appearance-none
              border
              rounded
              w-full
              py-2
              px-3
              text-gray-700
              leading-tight
              focus:outline-none
              focus:shadow-outline
            "
          >
          </textarea>
          <div v-if="form.errors.content">{{ form.errors.content }}</div>
        </div>

        <div class="flex items-left justify-between">
          <Link :href="route('posts.index')" 
            class="
              bg-red-500
              hover:bg-blue-700
              text-white
              font-bold
              py-2
              px-4
              rounded
              focus:outline-none
              focus:shadow-outline"
            as="button" 
            type="button">
            Cancel
          </Link>
          
          <button
            class="
              bg-blue-500
              hover:bg-blue-700
              text-white
              font-bold
              py-2
              px-4
              rounded
              focus:outline-none
              focus:shadow-outline
            "
            type="submit"
          >
            {{ isUpdateMode ? "Update" : "Add" }}
          </button>
        </div>
      </form>
    </div>
  </app-layout>
</template>

<script>
import { useForm } from "@inertiajs/inertia-vue3";
import InteractsWithPost from "@/Pages/Posts/InteractsWithPost.vue";
import AppLayout from "@/Layouts/AppLayout.vue";
import { Link } from '@inertiajs/inertia-vue3'

export default {
  props: ["post"],

  mixins: [InteractsWithPost],

  setup() {
    const form = useForm({
      title: null,
      content: null,
    });

    return { form };
  },

  components: {
    AppLayout,
    Link
  },

  computed: {
    isUpdateMode() {
      return this.route().current("posts.edit");
    },
  },

  mounted() {
    this.form.title = this.post?.title
    this.form.content = this.post?.content
  }
};
</script>
