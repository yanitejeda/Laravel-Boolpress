<template>
  <div>
    
    <div class="card">
      <img src="coverImg" class="card-img-top" alt="..." />
      <div class="card-body">
        <h3 class="card-title">{{ title }}</h3>
        <h5>{{ subtitle }}</h5>
        <p class="card-text">{{ content }}</p>
        <h6>{{ author }}</h6>
        <h6>{{ category }}</h6>
      </div>
    </div>
  </div>

</template>

<script>
export default {
    name:"PostComponent",
  props: {
    title: String,
    coverImg: String,
    subtitle: String,
    content: String,
    author: String,
    category: String,
  },
};
</script>