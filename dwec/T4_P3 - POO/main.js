export class person {
  #name;
  #surname;
  country;
  age;

  constructor(name, surname, country, age) {
    this.#name = name;
    this.#surname = surname;
    this.country = country;
    this.age = age;
  }

  // GETTERS
  getName() {
    return this.#name;
  }
  getSurname() {
    return this.#surname;
  }
  getCountry() {
    return this.country;
  }
  getAge() {
    return this.age;
  }

  //SETTERS
  setName(name) {
    this.#name = name;
    return this.#name;
  }
  setSurname(surname) {
    this.#surname = surname;
    return this.#surname;
  }
  setCountry(country) {
    this.country = country;
    return this.country;
  }
  setAge(age) {
    this.age = age;
    return this.age;
  }
}

export const p1 = new person("John", "Doe", "USA", 32);
