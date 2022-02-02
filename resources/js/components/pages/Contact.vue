<template>
  <div>
    <Header titolo=" Pagina contatti" sottoTitolo=" sotto titolo"> </Header>

    <form @submit.prevent="onSubmit" v-if="!formInviato">
      <div class="mb-3">
        <label for="name" class="form-label">name</label>
        <input type="text" class="form-control" v-model="form.name" />
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">email</label>
        <input
          type="text"
          class="form-control"
          v-model="form.email"
        />
      </div>
      <div class="mb-3">
        <label for="messagge" class="form-label">Meassage</label>
        <input
          type="text"
          class="form-control"
          v-model="form.message"
        />
      </div>

      <button type="submit" class="btn btn-primary">crea</button>
    </form>
    <div class="alert alert-success" v-else>inviato</div>
  </div>
</template>

<script>
import Axios from 'axios';
import Header from "../pages/pagesPart/Header.vue";
export default {
  components: { Header },

  data() {
    return {
      formInviato: false,
      form: {
        name: "",
        email: "",
        message: "",
      },
    };
  },
  methods: {
    onSubmit(){
      Axios.post('/api/contacts', this.form).then((resp)=>{
        this.formInviato=true;
        
      });
    },
  },
};
</script>