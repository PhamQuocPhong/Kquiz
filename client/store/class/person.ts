export  abstract class Person {

    name: string
    age: number
    address: string

    
    constructor(name: string, age: number, address: string) {
        this.name = name
        this.age = age
        this.address = address
    }

    getInfo(data: object): object{
    	return data
    }

    display(): void{
        console.log(this.name);
    }

    abstract find(name: string): Person;
}