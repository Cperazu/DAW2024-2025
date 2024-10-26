let page = 0;

let pageObj = [
  {
    1: "What is the capital of France?",
    2: ["London", "Berlín", "Paris", "Madrid"],
    3: ""
  },
  {
    1: "What is the longest river in the world?",
    2: ["Amazonas", "Nilo", "Yangtsé", "Miño"],
    3: ""
  },
  {
    1: "Who wrote Romeo and Juliet?",
    2: ["Jane Austen", "Cervantes", "William Shakerpeare", "Charles Dickens"],
    3: ""
  },
  {
    1: "How many planets are there in our solar system?",
    2: ["7", "8", "9", "10"],
    3: ""
  },
];

let selectedAswersObject = {
  0: "",
  1: "",
  2: "",
  3: "",
};

function currentPage() {
  return page;
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
    if (answer == pageObj[page][3]) {
      button.setAttribute("style", "background-color: #3CB371;");
    };
    button.addEventListener("click", () => {
      document.querySelectorAll("button").forEach((btn) => {
        btn.removeAttribute("style");
        btn.removeAttribute("selected");
      });
      button.setAttribute("style", "background-color: #3CB371;");
      button.setAttribute("selected", true);
    });
    const li = document.createElement("li");
    li.textContent = answer;
    button.appendChild(li);
    divContainerAnswers.appendChild(button);
  });
}

function saveAswers() {
  if (document.querySelector('button[selected="true"]')) {
    let selectedOne = document.querySelector(
      'button[selected="true"]'
    ).textContent;
    pageObj[page][3] = selectedOne;
  }
}
// CONTROL PRINCIPAL DEL FLUJO

nextButton.addEventListener("click", () => {
  if (page < pageObj.length - 1) {
    saveAswers();
    page++;
    setQuestion();
    setAnswers();
  }
});

previousButton.addEventListener("click", () => {
  if (page > 0) {
    saveAswers();
    page--;
    setQuestion();
    setAnswers();
  }
});

//INICIAR PÁGINA WEB

setQuestion();
setAnswers();
