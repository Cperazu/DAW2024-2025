export class reviews {
    #reviews
    constructor(reviews) {
        this.#reviews= reviews
    }
    getReviews(){
        return this.#reviews
    }
}