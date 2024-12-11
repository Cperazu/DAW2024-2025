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

  const h1 = document.createElement("h1");
  h1.textContent = "Coches desde 2010";

  const filters = document.createElement("div");

  // Se agrega a divBlock cada div dentro del array carsDivs
  carsDivs.forEach((div) => {
    divBlock.appendChild(div); // Añadir cada div generado
  });

  const spanYear = document.createElement("span");
  spanYear.innerHTML = "<strong>Year: </strong>";
  const selectYear = document.createElement("select");
  // Genero una opcion pero solo los year que tienen los Car (no puedes seleccionar un año que no lo tenga ningun coche) y la implemento dentro del select
  mappedCars.forEach((mc) => {
    const option = document.createElement("option");
    option.textContent = `${mc.getYear()}`;
    selectYear.appendChild(option);
  });
  filters.appendChild(spanYear);
  filters.appendChild(selectYear);

  const spanMake = document.createElement("span");
  spanMake.innerHTML = "<strong>Make: </strong>";
  const selectMake = document.createElement("select");
  // Genero una opcion pero solo los make que tienen los Car (no puedes seleccionar una marca  que no lo tenga ningun coche) y la implemento dentro del select
  mappedCars.forEach((mc) => {
    const option = document.createElement("option");
    option.textContent = `${mc.getMake()}`;
    selectMake.appendChild(option);
  });
  filters.appendChild(spanMake);
  filters.appendChild(selectMake);

  //  Esta actividad es de repaso asi que no continuo con los filtros ya que se como implementarlos

  filters.setAttribute("class", "filters");
  filters.appendChild(divBlock);
  body.appendChild(h1);
  body.appendChild(filters);
};

//Llamamos a la funcion para que todo empiece a funcionar
renderCars();
