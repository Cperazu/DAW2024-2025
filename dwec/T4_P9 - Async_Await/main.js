import { carsData } from "./mock.js";
import { mapDataToCars } from "./promises.js";
import { carsFilter } from "./promises.js";
import { divGenerator } from "./promises.js";

// USO ASYNC/AWAIT DE LAS PROMESAS
const renderCars = async () => {
  const mappedCars = await mapDataToCars(carsData);
  const filteredCars = await carsFilter(mappedCars);
  const carsDivs = await divGenerator(filteredCars);

  const body = document.querySelector("body");
  const divBlock = document.createElement("div");
  divBlock.setAttribute("class", "block");

  const container = document.createElement("div");
  container.setAttribute("class", "container");

  const h1 = document.createElement("h1");
  h1.textContent = "Coches desde 2010";

  // Se agrega a divBlock cada div dentro del array carsDivs
  carsDivs.forEach((div) => {
    divBlock.appendChild(div);  // Añadir cada div generado
  });

  container.appendChild(divBlock);
    body.appendChild(h1);
    body.appendChild(container);
};

//Llamamos a la funcion para que todo empiece a funcionar
renderCars();