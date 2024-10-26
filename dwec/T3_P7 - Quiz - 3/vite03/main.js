let page = 0;

const questions = [
  "What is the capital of France?",
  "What is the longest river in the world?",
  "Who wrote Romeo and Juliet?",
  "How many planets are there in our solar system?",
];

const answersBank = [
  ["London", "Berlín", "Paris", "Madrid"],
  ["Amazonas", "Nilo", "Yangtsé", "Miño"],
  ["Jane Austen", "Cervantes", "William Shakerpeare", "Charles Dickens"],
  ["7", "8", "9", "10"],
];

function currentQuestion() {
  return questions[question];
}

// BODY
const Body = document.querySelector("body");
const divContainer = document.createElement("div");

divContainer.setAttribute("class", "container");

Body.appendChild(divContainer);

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

answersBank[page].forEach((answer) => {
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
  p.textContent = questions[page];
  previousButton.disabled = page > 0 == false;
  nextButton.disabled = page < questions.length - 1 == false;
}

// CAMBIO DE RESPUESTAS SEGÚN LA PÁGINA ACTUAL

function setAnswers() {

    divContainerAnswers.innerHTML = "";

    answersBank[page].forEach((answer) => {
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
  if (page < questions.length - 1) {
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