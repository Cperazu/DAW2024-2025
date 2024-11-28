let page = 0;

let pageObj = [
  {
    1: "What is the capital of France?",
    2: ["London", "Berlín", "Paris", "Madrid"],
    3: "",
    4: "Paris"
  },
  {
    1: "What is the longest river in the world?",
    2: ["Amazonas", "Nilo", "Yangtsé", "Miño"],
    3: "",
    4: "Nilo"
  },
  {
    1: "Who wrote Romeo and Juliet?",
    2: ["Jane Austen", "Cervantes", "William Shakerpeare", "Charles Dickens"],
    3: "",
    4: "William Shakerpeare"
  },
  {
    1: "How many planets are there in our solar system?",
    2: ["7", "8", "9", "10"],
    3: "",
    4: "8"
  },
];

function currentPage() {
  return page;
}

// BODY
const body = document.querySelector("body");
const divContainer = document.createElement("div");

divContainer.setAttribute("class", "container");

body.appendChild(divContainer);

// DIV PRINCIPAL

const h1 = document.createElement("h1");
const p = document.createElement("p");
const divContainerAnswers = document.createElement("div");
const divContainerFooter = document.createElement("div");

h1.textContent = "Quiz Question";
divContainerAnswers.setAttribute("class", "container-answers");
divContainerFooter.setAttribute("class", "container-footer");

divContainer.appendChild(h1);
divContainer.appendChild(p);
divContainer.appendChild(divContainerAnswers);
divContainer.appendChild(divContainerFooter);

//DIV ANSWERS

pageObj[page][2].forEach((answer) => {
  const button = document.createElement("button");
  button.setAttribute("class", "answer-btn");
  const li = document.createElement("li");
  li.textContent = answer;
  button.appendChild(li);
  divContainerAnswers.appendChild(button);
});

//DIV FOOTER
const previousButton = document.createElement("button");
const nextButton = document.createElement("button");
const checkButton = document.createElement("button");

previousButton.textContent = "Previous";
previousButton.setAttribute("class", "footer-btn");

nextButton.textContent = "Next";
nextButton.setAttribute("class", "footer-btn");

checkButton.textContent = "Check";
checkButton.setAttribute("class", "footer-btn");
checkButton.setAttribute("disabled", "true");

divContainerFooter.appendChild(previousButton);
divContainerFooter.appendChild(nextButton);
divContainerFooter.appendChild(checkButton);


// FUNCIONES

/* 
  Genera las preguntas de Quiz según el índice que se encuentre dentro del objeto pageObj
  en función del contador 'page' dentro del atributo '1'
*/
function setQuestion() {
  p.textContent = pageObj[page][1];
}

/*
  Genera los button según el índice que se encuentre dentro del objeto pageObj
  en función del contador 'page' dentro del atributo '2'.
  */
function setAnswers() {
  /* reseta el contenida del HTML en divContainerAnswers */
  divContainerAnswers.innerHTML = "";
  pageObj[page][2].forEach((answer) => {
    const button = document.createElement("button");
    button.setAttribute("class", "answer-btn");
    if (answer == pageObj[page][3]) {
      /*
        Si answer es igual que la respuesta guardada en en banco de respuestas localizado 
        en el atriburo 3 del objeto pageObj en la posición de array de 'page' entonces
        se colorea de verderde el boton en cuestion.
    */
      button.setAttribute("style", "background-color: #3CB371;");
    };
    const li = document.createElement("li");
    li.textContent = answer;
    button.appendChild(li);
    divContainerAnswers.appendChild(button);
  });

  let answersButtons = document.querySelectorAll("button[class='answer-btn']");
  answersButtons.forEach((btn) => {
    btn.addEventListener('click', () => {
      /*
          Se añade un detector de eventos para que en caso de hacer 'click' 
          sobre un boton ...
        */
          document.querySelectorAll("button").forEach((btn) => {
            btn.removeAttribute("style");
            btn.removeAttribute("selected");
            /*
              se elimine la propiedad "style" del nodo de todos los botones (por lo que ya ninguno
              estara pintado) y además se elimina el atributo "selected" para que a la hora de guardar 
              las respuestas se guarde solo la ultima opción clickada y no todas.
            */
          });
          btn.setAttribute("style", "background-color: #3CB371;");
          btn.setAttribute("selected", true);

          saveAswers();
          countSavedAswers();
          checkButtonUpdate();
    })
  });

    /*
  desabilita el boton 'Previus' si estamos en la primera pagina o 'Next' si estamos 
  en la última.
  */
previousButton.disabled = page > 0 == false; 
nextButton.disabled = page < pageObj.length - 1 == false;
checkButton.disabled =  true;
};


/* 
Si countSavedAnswers() devuelve true (es decir, hay 4 respuestas almacenadas en pageObj 
la condición de checkButton.disable es false y por tanto se activa el boton)
*/
function checkButtonUpdate(){
  checkButton.disabled =  countSavedAswers() != true;
};

/* 
Esta funcion en caso de que exista un boton con el atributo 'selected' = 'true' guarda en una 
variable el contenido del boton y lo registra en el banco de respuestas del pageObj 
*/
function saveAswers() {
  if (document.querySelector('button[selected="true"]')) {
    let selectedOne = document.querySelector(
      'button[selected="true"]'
    ).textContent;
    pageObj[page][3] = selectedOne;
  }
}

/* 
  Cuenta todas las respuestas guardadas en pageObj y devuelve 
  true si llegan a 4 o false en caso contrario
*/
function countSavedAswers() {
  let count = 0;
  pageObj.forEach((po) => {
    if (po[3]) {
      count++;
    }
  });

  return (count == 4);
};

function correctAnswers(){
  let count = 0;
  pageObj.forEach((po) => {
    if (po[3]==po[4]) {
      count++;
    }
  });
  
    alert(count + " of " + pageObj.length);

};

// CONTROL PRINCIPAL DEL FLUJO

/* 
  Carga de las páginas del Quiz según el boton que pulsemos
*/
nextButton.addEventListener("click", () => {
  if (page < pageObj.length - 1) {
    page++;
    setQuestion();
    setAnswers();
    checkButtonUpdate();

  }
});

previousButton.addEventListener("click", () => {
  if (page > 0) {
    page--;
    setQuestion();
    setAnswers();
    checkButtonUpdate();

  }
});

checkButton.addEventListener(('click'), () =>{
  correctAnswers();
});

//INICIAR PÁGINA WEB

setQuestion();
setAnswers();
