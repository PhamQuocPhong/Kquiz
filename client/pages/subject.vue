<template>
  <v-layout>
    <v-flex class="text-center">
      <v-row>
        <v-col cols="12">
          <v-subheader>{{title}}</v-subheader>

          <div v-for="(item, index) in allSubjects" :key="index">
            <h3>{{item.name}}</h3>
          </div>
<!-- 
          <div v-for="(item, index) in allQuestions" >
            <h3>{{item.title}}</h3>
          </div> -->

          <v-btn @click="flag = !flag">Click</v-btn>

        </v-col>
      </v-row>
    </v-flex>
  </v-layout>
</template>


<script>

import { mapGetters,  mapActions} from 'vuex'

export default {


  async asyncData({store, route}){

    await store.dispatch('subjects/getAllSubjects')
    await store.dispatch('questions/getAllQuestions')
  },

  fetchOnServer: true,

  data(){
    return {
      title: 'Hiiiiiiiiiii',
      message: 'hello world',
      flag: false,

    } 
  },

  watch: {
    flag(val){
      return val && this.showMessage()
    }
  },

  methods: {
    showMessage(){

      var key = "okey"

      var obj = {
          title: this.title,
          message: this.message
      }

      console.log(obj)
    },
  },

  computed: {

    allSubjects(){
      return this.$store.getters['subjects/allSubjects']
    },

    allQuestions(){
       return this.$store.getters['questions/allQuestions']
    }

  }
}
</script>