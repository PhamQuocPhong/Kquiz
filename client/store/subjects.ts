import { Module, VuexModule, Action, Mutation } from 'vuex-module-decorators'
import { $axios } from '@/utils/api'
import { Subject, Question } from './types'


@Module({
  name: 'subjects',
  stateFactory: true,
  namespaced: true,
})

export default class SubjectModule extends VuexModule {
  subjects: Subject[] = []

  @Mutation
  setSubjects(subjects: Subject[]) {
    this.subjects = subjects
  }

  @Action({ rawError: true })
  async getAllSubjects() {
    var res = await $axios.$get('/subjects')

    if(res.status_code === 200){
      this.setSubjects(res.data)
    }
  }  

  get allSubjects(){
    return this.subjects
  }

}
