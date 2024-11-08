
export class birth extends director {
    #date
    #place

    constructor(date, place) {
        this.#date=date
        this.#place=place
    }

    get date(){
        return this.#date
    }

    get place(){
        return this.#place
    }
}

export let birth_director_1 = new birth ("31 de octubre de 1961", "Pukerua Bya, Nueva Zelanda")
console.log(birth_director_1)