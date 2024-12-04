
import { title } from "../title/title.class";

export class movie extends title {
  #title;
  #director;
  #year;
  #genre;
  #duration;
  #rating;
  #synopsis;

  constructor(title, director, year, genre, duration, rating, synopsis) {
    super(title);
    this.#director = director;
    this.#year = year;
    this.#genre = genre;
    this.#duration = duration;
    this.#rating = rating;
    this.#synopsis = synopsis;
  }

  //getters
  getTitle() {
    return super.getTitle();
  }
  getDirector() {
    return this.#director;
  }
  getYear() {
    return this.#year;
  }
  getGenre() {
    return this.#genre;
  }
  getDuration() {
    return this.#duration;
  }
  getRating() {
    return this.#rating;
  }
  getSynopsis() {
    return this.#synopsis;
  }

  //setters
  setTitle(title) {
   super.setTitle(title)
    return this;
  }
  setDirector(director) {
    this.#director = director;
    return this;
  }
  setYear(year) {
    this.#year = year;
    return this;
  }
  setGenre(genre) {
    this.#genre = genre;
    return this;
  }
  setDuration(duration) {
    this.#duration = duration;
    return this;
  }
  setRating(rating) {
    this.#rating = rating;
    return this;
  }
  setSynopsis(synopsis) {
    this.#synopsis = synopsis;
    return this;
  }
}
