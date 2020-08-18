import { Module, VuexModule, Action, Mutation } from 'vuex-module-decorators'
import { $axios } from '@/utils/api'
import { Question } from './types'


@Module({
  name: 'questions',
  stateFactory: true,
  namespaced: true,
})

export default class QuestionModule extends VuexModule {
  questions: Question[] = []

  @Mutation
  setQuestions(questions: Question[]) {
    this.questions = questions
  }

  // action
  @Action({ rawError: true })
  async getAllQuestions() {
    var res = await $axios.$get('/questions')

    if(res.status_code === 200){
      this.setQuestions(res.data)
    }
  }  

  // getter 
  get allQuestions(){
    return this.questions
  }

}
