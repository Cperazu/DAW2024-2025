export class director {
    #name
    #nationality
    #birth
    #notableFilmography
    
    constructor(name, nationality, birth, notableFilmography) {
        this.#name = name
        this.#nationality = nationality
        this.#birth = birth
        this.#notableFilmography = notableFilmography
    }

    getName(){
        return this.#name
    }
    getNationality(){
        return this.#nationality
    }
    getBirth(){
        return this.#birth
    }
    getNotableFilmography(){
        return this.#notableFilmography
    }

    setDirector (name) {
        this.#name = name
        return this.#name
    }
    setNationality(){
        this.#nationality = nationality
        return this.#nationality
    }
    setBirth(){
        this.#birth = birth
        return this.#birth
    }
    setNotableFilmography(){
        this.#notableFilmography = notableFilmography
        return this.#notableFilmography
    }
}