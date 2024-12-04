export class rating {
  #rating;
  constructor(rating) {
    this.#rating = rating;
  }

  getRating() {
    return this.#rating;
  }

}
