
import { Person } from './person'


class Student extends Person {

	list: Student[] = []

	constructor(name: string, age: number, address: string){
		super(name, age, address)
	}



	find(name: string): Person {

		var student = new Student("Phong", 22, "Quận 7")

		return student
	}
}

