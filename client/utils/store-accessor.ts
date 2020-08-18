import { Store } from 'vuex'
import { getModule } from 'vuex-module-decorators'
import UserModule from '../store/users'
import SubjectModule from '../store/subjects'
import QuestionModule from '../store/questions'


let userStore: UserModule
let subjectStore: SubjectModule
let questionStore: QuestionModule


function initialiseStores(store: Store<any>): void {
  userStore = getModule(UserModule, store)
  subjectStore = getModule(SubjectModule, store)
  questionStore = getModule(QuestionModule, store)
}

export { initialiseStores }