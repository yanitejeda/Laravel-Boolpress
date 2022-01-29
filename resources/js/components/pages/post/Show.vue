<template>
  <div>
    <Header :titolo="post.titolo"></Header>
    <!--  <PostComponent :title="post"></PostComponent>
    -->
    <h1>pagina show</h1>

    <div class="card">
      <img :src="post.coverImg" class="card-img-top" alt="..." />
      <div class="card-body">
        <h3 class="card-title">{{ post.title }}</h3>
        <p class="card-text">{{ post.content }}</p>
        <h6>{{ post.category }}</h6>
      </div>
    </div>
  </div>
</template>
<script>
import Axios from "axios";
import Header from "../pagesPart/Header.vue";
import PostComponent from "../pagesPart/PostComponent.vue";
export default {
  components: { Header, PostComponent },
  data() {
    return {
      post: {
        type: Object,
        default: () => ({}),
      },
    };
  },

  methods: {
    fetchPost() {
      const url = "/api/posts/" + this.$route.params.id;
      Axios.get(url).then((resp) => {
        //console.log(resp);
        // console.log(resp.data);
        this.post = resp.data;
      });
      //Axios.get("/api/posts/" + this.$route.params.id)
    },
  },

  mounted() {
    this.fetchPost();
  },
};
</script>