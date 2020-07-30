<template>
  <v-layout>
    <v-flex class="text-center">
      <img
        src="/v.png"
        alt="Vuetify.js"
        class="mb-5"
      >
      <blockquote class="blockquote">
        &#8220;First, solve the problem. Then, write the code.&#8221;
        <footer>
          <small>
            <em>&mdash;John Johnson</em>
          </small>
        </footer>
      </blockquote>
    </v-flex>
  </v-layout>
</template>


<script>

import { mapGetters,  mapActions} from 'vuex'

export default {

  data(){
    return {
      data: 'Hello'
    } 
  },

  created(){
      this.$store.dispatch('user/getUsers')
  },

  mounted(){

    console.log(this.getAllUsers)
  },

  methods: {

  },

  computed: {

    getAllUsers(){
      return this.$store.getters['user/allUsers']
    }

  }
}
</script>