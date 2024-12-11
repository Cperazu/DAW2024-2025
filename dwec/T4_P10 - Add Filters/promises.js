import { Car } from "./Car.class.js";

export const mapDataToCars = (data) => {
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
export const carsFilter = (array) => {
  return new Promise((resolve) => {
    const carsFiltered = array.filter((c) => c.year >= 2010);
    console.log(carsFiltered);
    resolve(carsFiltered);
  });
};

export const divGenerator = async (array) => {
  return new Promise((resolve) => {
    const carsDivs = array.map((c) => {
      const cDiv = document.createElement("div");
      const cP1 = document.createElement("p");
      cP1.textContent = `Model: ${c.getModel()}, Make: ${c.getMake()}`;
      const cP2 = document.createElement("p");
      cP2.textContent = `Type: ${c.getType()}, Year: ${c.getYear()}`;

      cDiv.appendChild(cP1);
      cDiv.appendChild(cP2);
      return cDiv; // Retorna el div generado, que es un nodo DOM válido
    });
    console.log(carsDivs);
    resolve(carsDivs);
    return carsDivs; // Retorna un array de nodos div
  });
};
