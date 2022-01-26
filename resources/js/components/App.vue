<template>
  <div>
    <h1>{{ hollowMsg }}</h1>
    <!--  <h2>{{listaPost}}</h2> -->
    
      <div v-for="(element, post) in listaPost" :key="post">
       <!--  {{ element.title }}
 -->
        <div class="card">
        <img src=" element.coverImg" class="card-img-top" alt="..." />
           <div class="card-body">
            <h3 class="card-title">{{ element.title }}</h3>
            <h5>{{ element.subtitle }}</h5>
            <p class="card-text">{{ element.content }}</p>
            <h6>{{ element.author }}</h6>
            <h6>{{ element.category }}</h6>
          </div>
        </div>
      </div>
    
  </div>
</template>

<script>
import axios from "axios";
export default {
  name: "App",
  data() {
    return {
      hollowMsg: "pagina di benvenuto",
      listaPost: [],
    };
  },

  mounted() {
    axios.get("/api/posts").then((resp) => {
      console.log(resp.data);
      this.listaPost = resp.data;
    });
  },
};
</script>