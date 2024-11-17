// Selecciono el div principal que va a tener la clase container y se la aplico.
const divContainer = document.querySelector('div');
divContainer.setAttribute("class", "container")

// Selecciono el div que va a tener la clase search y se la aplico.
divContainer.querySelector("div:first-of-type").setAttribute("class", "search")

// Selecciono el button que va a tener la clase btn-add y se la aplico.
divContainer.querySelector('div:first-of-type > form > button:first-of-type').setAttribute('class', 'btn-add')

// Selecciono el button que va a tener la clase li-container y se la aplico.
divContainer.querySelector('div:nth-of-type(2)').setAttribute("class", "li-container")

// Selecciono el button que va a tener la clase empty y se la aplico.
divContainer.querySelector('div:nth-of-type(3)').setAttribute("class", "empty")

// Selecciono el button que va a tener la clase task-count y se la aplico.
divContainer.querySelector('div:last-of-type').setAttribute("class", "task-count")

// Creo una constante para el button que va a servir para la mayor parte de la funcionalidad de la página web 
// para ahorrarnos tiempo en un futuro.
const taskButton = divContainer.querySelector('button[class=btn-add]')

taskButton.addEventListener('click', ()=>{
  const ul = divContainer.querySelector('div:nth-of-type(2) > ul')

  const li = document.createElement('li')
  const p = document.createElement('p')
  const span = document.createElement('span')
  span.innerHTML = 'hola'

  p.appendChild(span)
  li.appendChild(p)
  ul.appendChild(li)
  
})