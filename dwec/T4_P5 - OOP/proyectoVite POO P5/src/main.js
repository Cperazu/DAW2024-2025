/* // DATOS

import { product } from "../classes/asin.product/asin.product.class";
import { asin } from "../classes/asin/asin.class";
import { current_price } from "../classes/price/current_price/current_price.class";
import { price } from "../classes/price/price.class";
import { rating } from "../classes/reviews/rating/rating.class";
import { reviews } from "../classes/reviews/reviews.class";

export const ra1 = new rating(4.6);
export const re1 = new reviews(ra1);

export const cp1 = new current_price("399.00");
export const pr1 = new price(cp1);

export const a1 = new asin("B087623TMW");

export const p1 = new product(a1, pr1, re1);

// LOGICA

const body = document.querySelector("body");
const container = document.createElement("div");
body.appendChild(container);

const asin_p = document.createElement("p");
asin_p.textContent = `ASIN: ${a1.getAsin()}`; // Supongo que tienes un método `getAsin` en tu clase `asin`.

const asin_li = document.createElement("li");
asin_li.style.backgroundColor = "blue";

asin_li.appendChild(asin_p);
container.appendChild(asin_li);
 */

// DATOS
class asin {
  #asin;
  constructor(asin) {
    this.#asin = asin;
  }
  getAsin() {
    return this.#asin;
  }
}

class current_price {
  #current_price;
  constructor(current_price) {
    this.#current_price = current_price;
  }

  getCurrent_price() {
    return this.#current_price;
  }
}

class price {
  #price;
  constructor(price) {
    this.#price = price;
  }
  getPrice() {
    return this.#price;
  }
}

class rating {
  #rating;
  constructor(rating) {
    this.#rating = rating;
  }

  getRating() {
    return this.#rating;
  }
}

class product extends asin {
  #asin;
  #price;
  #reviews;
  constructor(asin, price, reviews) {
    super(asin);
    this.#price = price;
    this.#reviews = reviews;
  }

  getAsin() {
    return super.getAsin();
  }
  getPrice() {
    return this.#price;
  }
  getReviews() {
    return this.#reviews;
  }
}

class reviews {
  #reviews;
  constructor(reviews) {
    this.#reviews = reviews;
  }
  getReviews() {
    return this.#reviews;
  }
}

const ra1 = new rating(4.6);
const re1 = new reviews(ra1);

const cp1 = new current_price("399.00");
const pr1 = new price(cp1);

const a1 = new asin("B087623TMW");

const p1 = new product(a1, pr1, re1);

// LOGICA
const body = document.querySelector("body");
const container = document.createElement("div");
body.appendChild(container);

const asin_p = document.createElement("p");
asin_p.textContent = `ASIN: ${a1.getAsin()}`;

const asin_li = document.createElement("li");
asin_li.style.backgroundColor = "blue";

asin_li.appendChild(asin_p);
container.appendChild(asin_li);
