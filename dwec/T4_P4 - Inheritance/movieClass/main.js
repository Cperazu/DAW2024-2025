import { birth } from "../birthClass/main"

export class movie {
    #title
    #director
    #year
    #genre
    #duraction
    #rating
    #synopsis

    constructor(title, director, year, genre, duraction, rating, synopsis ) {
        this.#title=title
        this.#director=director
        this.#year=year
        this.#genre=genre
        this.#duraction=duraction
        this.#rating=rating
        this.#synopsis=synopsis
    }

    get title(){
        return this.#title
    }
    get director(){
        return this.#director
    }
    get year(){
        return this.#year
    }
    get genre(){
        return this.#genre
    }
    get duraction(){
        return this.#duraction
    }
    get rating(){
        return this.#rating
    }
    get synopsis(){
        return this.#synopsis
    }

}

export let movie_1 = new movie(
    "El Señor de los Anillos: La Comudidad del Anillo",
    director_1,
    2001,
    "Fantasia",
    178,
    9.2,
    "Un hobbit llamado Frodon Baggins ..."

)

