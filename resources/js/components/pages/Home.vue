<template>
  <div>
    <!-- header content -->
    <div>
      <Header titolo="Home page" sottoTitolo="pagina principale"></Header>
    </div>

    <!-- main content -->
    <div class="text-center">
      <h1>{{ hollowMsg }}</h1>

      <div v-for="(element, post) in listaPost" :key="post">
        <router-link :to="{ name: 'posts.show', params: { id: element.id } }">
          <div class="card">
            <img :src="'/storage/' +element.coverImg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h3 class="card-title">{{ element.title }}</h3>
              <p class="card-text">{{ element.content }}</p>
              <p v-if='element.category && element.category.name' class="card-text">{{ element.category.name }}</p>
            </div>
          </div>
        </router-link>
      </div>
      <!--  <PostComponent 
            v-for="post in listaPost"
            :key='post.id'>
            </PostComponent> -->
    </div>
  </div>
</template>

<script>
import axios from "axios";
import Header from "../pages/pagesPart/Header.vue";
//import PostComponent from "../pages/pagesPart/PostComponent.vue";
export default {
  name: "App",
  components: { Header /* PostComponent */ },
  data() {
    return {
      hollowMsg: "pagina di benvenuto guest",
      listaPost: [],
    };
  },

  mounted() {
    axios.get("/api/posts").then((resp) => {
      // console.log(resp.data);
      this.listaPost = resp.data;
    });
  },
};
</script>