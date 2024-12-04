export class current_price {
    #current_price
    constructor(current_price) {
        this.#current_price=current_price
    }

    getCurrent_price(){
        return this.#current_price
    }
}