<template>
  <div>
    <!-- navbar content -->

    <div>
      <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
        <div>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarResponsive"
            aria-controls="navbarResponsive"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            Menu
            <i class="fas fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto py-4 py-lg-0">
              <li class="nav-item">
                <router-link class="nav-link px-lg-3 py-3 py-lg-4" to="/"> Home </router-link>
              </li>
              <li class="nav-item">
                <router-link class="nav-link px-lg-3 py-3 py-lg-4" to="/contact">contatti</router-link>
              </li>

              <li class="nav-item">
                <router-link class="nav-link px-lg-3 py-3 py-lg-4" to="/about">Chi siamo</router-link>
              </li>

              
            </ul>
          </div>
        </div>
      </nav>
    </div>

    <router-view></router-view>

    <!-- footer content -->
    <div class="container px-4 px-lg-5">
      <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
          <div class="small text-center text-muted fst-italic">
            footer del blog
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
//import axios from "axios";
export default {
  name: "App",
  data() {
    return {
       hollowMsg: "pagina di benvenuto guest",
     /* listaPost: [], */
    };
  },
/* 
  mounted() {
    axios.get("/api/posts").then((resp) => {
      console.log(resp.data);
      this.listaPost = resp.data;
    });
  }, */
};
</script>