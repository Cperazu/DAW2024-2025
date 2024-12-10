const carsData = [
  {
    id: 9582,
    year: 2008,
    make: "Buick",
    model: "Enclave",
    type: "SUV",
  },
  {
    id: 9583,
    year: 2006,
    make: "MINI",
    model: "Convertible",
    type: "Convertible",
  },
  {
    id: 9584,
    year: 2019,
    make: "Volvo",
    model: "XC90",
    type: "SUV",
  },
  {
    id: 9585,
    year: 1999,
    make: "Ford",
    model: "Taurus",
    type: "Sedan, Wagon",
  },
  {
    id: 9586,
    year: 2020,
    make: "Volvo",
    model: "XC60",
    type: "SUV",
  },
  {
    id: 9587,
    year: 2006,
    make: "HUMMER",
    model: "H2",
    type: "SUV, Pickup",
  },
  {
    id: 9588,
    year: 2016,
    make: "GMC",
    model: "Sierra 1500 Crew Cab",
    type: "Pickup",
  },
  {
    id: 9589,
    year: 2008,
    make: "GMC",
    model: "Canyon Crew Cab",
    type: "Pickup",
  },
  {
    id: 9590,
    year: 2016,
    make: "Subaru",
    model: "Outback",
    type: "SUV",
  },
  {
    id: 9591,
    year: 2010,
    make: "Mitsubishi",
    model: "Outlander",
    type: "SUV",
  },
];
class Car {
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
const mapDataToCars = (data) => {
  return new Promise((resolve) => {
    const carsArray = data.map((c) => {
      const car = new Car(c.id, c.make);
      car.setModel(c.model);
      car.setType(c.type);
      car.setYear(c.year);
      return car;
    });
    console.log(carsArray);
    resolve(carsArray);
  });
};
const p1 = await mapDataToCars(carsData);
const carsFilter = (array) => {
  return new Promise((resolve) => {
    const carsFiltered = array.filter((c) => c.year >= 2010);
    console.log(carsFiltered);
    resolve(carsFiltered);
  });
};

const p2 = await carsFilter(p1);
