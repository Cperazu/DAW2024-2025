export class birth {
    #date
    #place
    
    constructor(date, place) {
        this.#date = date
        this.#place = place
    }

    getDate() {
        return this.#date
    }
    getPlace() {
        return this.#place
    }

    setDate (date) {
        this.#date = date
        return this.#date
    }
    setPlace (place) {
        this.#place = place
        return this.#place
    }
}