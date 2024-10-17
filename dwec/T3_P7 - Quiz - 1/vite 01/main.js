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
p.textContent = "What is the capital of France?";
divContainerAnswers.setAttribute("class", "container-answers");
divContainerFooter.setAttribute("class", "container-footer");

divContainer.appendChild(h1);
divContainer.appendChild(p);
divContainer.appendChild(divContainerAnswers);
divContainer.appendChild(divContainerFooter);

//DIV RESPUESTAS
optionQuestion = ["London", "Berlín", "París", "France"];

const button1 = document.createElement("button");
const button3 = document.createElement("button");
const button2 = document.createElement("button");
const button4 = document.createElement("button");

button1.setAttribute("class", "answer-btn");
button2.setAttribute("class", "answer-btn");
button3.setAttribute("class", "answer-btn");
button4.setAttribute("class", "answer-btn");

button1.textContent = optionQuestion[0];
button2.textContent = optionQuestion[1];
button3.textContent = optionQuestion[2];
button4.textContent = optionQuestion[3];

divContainerAnswers.appendChild(button1);
divContainerAnswers.appendChild(button2);
divContainerAnswers.appendChild(button3);
divContainerAnswers.appendChild(button4);

//DIV FOOTER
const previousButton = document.createElement("button");
const nextButton = document.createElement("button");

previousButton.textContent = "Previous";
previousButton.setAttribute("class", "footer-btn");

nextButton.textContent = "Next";
nextButton.setAttribute("class", "footer-btn");

divContainerFooter.appendChild(previousButton);
divContainerFooter.appendChild(nextButton);

//COLOCAR OPCIONES

