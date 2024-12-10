export class Car {
  #id;
  make;
  model;
  type;
  year;
  constructor(id, make) {
    this.#id = id;
    this.make = make;
  }
  // GETTERS
  getId() {
    return this.#id;
  }
  getMake() {
    return this.make;
  }
  getModel() {
    return this.model;
  }
  getType() {
    return this.type;
  }
  getYear() {
    return this.year;
  }

  // SETTERS
  setId(id) {
    this.#id = id;
    return this.#id;
  }
  setMake(make) {
    this.make = make;
    return this.make;
  }
  setModel(model) {
    this.model = model;
    return this.model;
  }
  setType(type) {
    this.type = type;
    return this.type;
  }
  setYear(year) {
    this.year = year;
    return this.year;
  }
}
