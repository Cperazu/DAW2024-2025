import { asin } from "../asin/asin.class";

export class product extends asin {
  #asin;
  #price;
  #reviews;
  constructor(asin, price, reviews) {
    super(asin);
    this.#price = price;
    this.#reviews = reviews;
  }

  getAsin(){
    return super.getAsin()
  }
  getPrice(){
    return this.#price
  }
  getReviews(){
    return this.#reviews
  }
}
