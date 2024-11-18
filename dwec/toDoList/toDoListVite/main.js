const body = document.querySelector('body')

// Selecciono el div principal que va a tener la clase container y se la aplico.
const divContainer = body.querySelector('div');
divContainer.setAttribute("class", "container")

// Selecciono el div que va a tener la clase search y se la aplico.
divContainer.querySelector("div:first-of-type").setAttribute("class", "search")

// Selecciono el button que va a tener la clase btn-add y se la aplico.
divContainer.querySelector('div:first-of-type > form > button:first-of-type').setAttribute('class', 'btn-add')

// Selecciono el button que va a tener la clase li-container y se la aplico.
const liDiv = divContainer.querySelector('div:nth-of-type(2)')
liDiv.setAttribute("class", "li-container")

// Selecciono el button que va a tener la clase empty y se la aplico.
divContainer.querySelector('div:nth-of-type(3)').setAttribute("class", "empty")

// Selecciono el button que va a tener la clase task-count y se la aplico.
divContainer.querySelector('div:last-of-type').setAttribute("class", "task-count")

// Creo una constante para el button que va a servir para la mayor parte de la funcionalidad de la página web 
// para ahorrarnos tiempo en un futuro.
const taskButton = divContainer.querySelector('button[class=btn-add]')

// constante del párrafo que te indica que cuando no tienes tareas pendientes
const noTasks = divContainer.querySelector('div[class=empty] p')

//constate del span que te muestra el número de tareas pendientes
const numTasks = body.querySelector('div[class=task-count] span:nth-of-type(2)')

//constante del input que nombra la tarea
const nameTaskInput = divContainer.querySelector('div:first-of-type form input')

// FLUJO PRINCIPAL DE LA PAGINA WEB (BOTON '+') 

// Cantidad de tareas activas
let tasks = 0;

taskButton.addEventListener('click', (event)=>{
 event.preventDefault();
 addTask()
})

// Funcion que añade una nueva tarea 
function addTask(){

    const ul = divContainer.querySelector('div:nth-of-type(2) > ul')

    const li = document.createElement('li')
    li.addEventListener('click', ()=>{
        li.style.textDecoration = 'line-through'
    })

    const p = document.createElement('p')

    const span = document.createElement('span')
    span.textContent = nameTaskInput.value
    console.log(span.textContent)

    const close = document.createElement('button')
    close.setAttribute('class', 'btn-delete')
    close.textContent = 'x'
    close.addEventListener('click', ()=> {
        ul.removeChild(li)
        tasks--
        numTasks.textContent = tasks
    })

    p.appendChild(span)
    p.appendChild(close)
    li.appendChild(p)
    ul.appendChild(li)

    tasks++
    numTasks.textContent = tasks

    if(tasks>0){
        noTasks.textContent = ''    
    }

    nameTaskInput.value = ''
}

