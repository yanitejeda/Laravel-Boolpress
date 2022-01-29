<template >
  <div class="masthead" style="background-image: url('img/avg.jpg')">
    <div class="container position-relative text-center px-4 px-lg-5">
      <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
          <div class="site-heading">
            <h1>{{ titolo }}</h1>
            <span class="subheading">
              <slot> {{ sottoTitolo }} </slot>
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    titolo: String,
    sottoTitolo: String,
  },
};
</script>