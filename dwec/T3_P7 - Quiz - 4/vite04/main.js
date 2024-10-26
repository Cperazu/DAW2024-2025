let page = 0;

let pageObj = [
  {
    1: "What is the capital of France?",
    2: ["London", "Berlín", "Paris", "Madrid"],
  },
  {
    1: "What is the longest river in the world?",
    2: ["Amazonas", "Nilo", "Yangtsé", "Miño"],
  },
  {
    1: "Who wrote Romeo and Juliet?",
    2: ["Jane Austen", "Cervantes", "William Shakerpeare", "Charles Dickens"],
  },
  {
    1: "How many planets are there in our solar system?",
    2: ["7", "8", "9", "10"],
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

previousButton.textContent = "Previous";
previousButton.setAttribute("class", "footer-btn");

nextButton.textContent = "Next";
nextButton.setAttribute("class", "footer-btn");

divContainerFooter.appendChild(previousButton);
divContainerFooter.appendChild(nextButton);

// CAMBIO DE PREGUNTAS SEGÚN LA PÁGINA ACTUAL

function setQuestion() {
  p.textContent = pageObj[page][1];
  previousButton.disabled = page > 0 == false;
  nextButton.disabled = page < pageObj.length - 1 == false;
}

// CAMBIO DE RESPUESTAS SEGÚN LA PÁGINA ACTUAL

function setAnswers() {
  divContainerAnswers.innerHTML = "";

  pageObj[page][2].forEach((answer) => {
    const button = document.createElement("button");
    button.setAttribute("class", "answer-btn");
    const li = document.createElement("li");
    li.textContent = answer;
    button.appendChild(li);
    divContainerAnswers.appendChild(button);
  });
}

// CONTROL PRINCIPAL DEL FLUJO

nextButton.addEventListener("click", () => {
  if (page < pageObj.length - 1) {
    page++;
    setQuestion();
    setAnswers();
  }
});

previousButton.addEventListener("click", () => {
  if (page > 0) {
    page--;
    setQuestion();
    setAnswers();
  }
});

//INICIAR PÁGINA WEB
setQuestion();
setAnswers();

