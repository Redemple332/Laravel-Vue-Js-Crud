<script>
export default {
  methods: {
    addPost() {
      this.form.post(this.route("posts.store"));
    },

    updatePost() {
      this.form.put(this.route("posts.update", this.post.id));
    },

    deletePost() {
      if (confirm("Are you sure?")) {
        this.$inertia.delete(this.route("posts.destroy", this.post.id));
      }
    },
  },
};
</script>