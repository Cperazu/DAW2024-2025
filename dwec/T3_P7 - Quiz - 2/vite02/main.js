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
const optionQuestion = ["London", "Berlín", "París", "France"];

optionQuestion.forEach(Text => {
    const button =document.createElement("button");
    button.setAttribute("class", "answer-btn")
    const li = document.createElement("li")
    li.textContent = Text;
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
