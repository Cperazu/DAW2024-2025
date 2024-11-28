
export class director extends movie {
    #name
    #nationality
    #birth
    #notableFilmography

    constructor(name, nationality, birth, notableFilmography) {
        this.#name=name
        this.#nationality=nationality
        this.#birth=birth
        this.#notableFilmography=notableFilmography
    }

    get name(){
        return this.#name
    }
    get nationality(){
        return this.#nationality
    }
    get birth(){
        return this.#birth
    }
    get notableFilmography(){
        return this.#notableFilmography
    }
}

export let director_1 = new director (
    "Peter jackson", 
    "Neozelandés", 
    birth_director_1,
    [
        "El señor de los Anillos",
        "El Hobbit",
        "King Kong"
    ]
)
console.log(director_1)