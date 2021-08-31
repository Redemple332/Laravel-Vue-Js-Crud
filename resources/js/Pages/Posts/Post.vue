<template>
  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
        <div class="max-w-sm w-full lg:max-w-full lg:flex">
          <div
            class="
              h-48
              lg:h-auto
              lg:w-48
              flex-none
              bg-cover
              rounded-t
              lg:rounded-t-none lg:rounded-l
              text-center
              overflow-hidden
            "
            style="background-image: url('/img/card-left.jpg')"
            title="Woman holding a mug"
          ></div>
          <div
            class="
              border-gray-400
              bg-white
              rounded-b
              lg:rounded-b-none lg:rounded-r
              p-4
              flex flex-col
              justify-between
              leading-normal
            "
          >
            <div class="mb-8">
              <div class="text-gray-900 font-bold text-xl mb-2">
                {{ post.title }}
              </div>
              <p class="text-gray-700 text-base">{{ post.content }}</p>
            </div>
            <div class="flex items-center">
              <img
                class="w-10 h-10 rounded-full mr-4"
                src="https://th.bing.com/th/id/OIP.4-wXhOkTOaNb4kHJHCA1zwHaHa?pid=ImgDet&w=512&h=512&rs=1"
                alt="Avatar of Jonathan Reinink"
              />
              <div class="text-sm">
                <p class="text-gray-900 leading-none">Redemple Marcelo</p>
                <p class="text-gray-600">Aug 18</p>

                <a
                v-if="isLogged"
                @click.prevent="deletePost"
                href="#"
                  style="color: red"
                >
                  Delete |</a
                >
                
                <Link v-if="isLogged" :href="route('posts.edit', post.id)" style="color: blue"
                  > Edit</Link
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";
import InteractsWithPost from "@/Pages/Posts/InteractsWithPost.vue";

export default {
  components: { Link },
  
  mixins: [InteractsWithPost],

  name: "Post",

  props: {
    post: Object,
  },

  computed: {
    isLogged() {
      return this.$page.props.user;
    }
  }
};
</script>
