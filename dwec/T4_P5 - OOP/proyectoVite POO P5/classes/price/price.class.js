export class price {
  #price;
  constructor(price) {
    this.#price = price;
  }
  getPrice(){
    return this.#price
  }
}
