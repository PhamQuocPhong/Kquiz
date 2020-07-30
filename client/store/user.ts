import { Module, VuexModule, Action, Mutation } from 'vuex-module-decorators'
import { $axios } from '@/utils/api'
import { User, Question } from './types'


@Module({
  name: 'user',
  stateFactory: true,
  namespaced: true,
})

export default class UserModule extends VuexModule {
  users: User[] = []
  userDisabled: User = {}

  @Mutation
  setUsers(users: User[]) {
    this.users = users
    this.userDisabled = {
      name: "Phong dep trai",
      password: "fsagsagsa"
    }
  }

  @Action({ rawError: true })
  async getUsers() {
    const res = await $axios.$get('/subjects')
    this.setUsers([
      {
        name: 'fasfasgsa',
        password: '21512521'
      }
    ])
  }  

  get allUsers(){
    return this.users
  }

}
