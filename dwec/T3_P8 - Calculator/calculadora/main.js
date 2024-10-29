const body = document.querySelector("body");

const calculator = document.createElement("div");
calculator.setAttribute("class", "calculator");

const calculatorScreen = document.createElement("div");
calculatorScreen.setAttribute("id", "screen");
calculatorScreen.setAttribute("class", "screen");

const calculatorUl = document.createElement("ul");
calculatorUl.setAttribute("id", "buttons");
calculatorUl.setAttribute("class", "buttons");

body.appendChild(calculator);
calculator.appendChild(calculatorScreen);
calculator.appendChild(calculatorUl);

/* Creación de las teclas de la calculadora por medio de dos arrays y un forEach */
const buttonDataKey = [
  "clear",
  "-",
  "/",
  "*",
  "7",
  "8",
  "9",
  "-",
  "4",
  "5",
  "6",
  "+",
  "1",
  "2",
  "3",
  "equal",
  "0",
  ".",
];
const buttonValue = [
  "C",
  "-",
  "/",
  "X",
  "7",
  "8",
  "9",
  "-",
  "4",
  "5",
  "6",
  "+",
  "1",
  "2",
  "3",
  "=",
  "0",
  ".",
];

let calObj = {
  data: "0",
};
calculatorScreen.innerHTML = calObj.data;

if (buttonDataKey.length == buttonValue.length) {
  let i = 0;
  buttonDataKey.forEach((bdk) => {
    const button = document.createElement("li");
    const link = document.createElement("a");

    link.setAttribute("href", "#");
    link.setAttribute("data-key", bdk);
    link.textContent = buttonValue[i];

    /* Añadiendo atributos que no son comunes */
    if (bdk === "equal") {
      link.setAttribute("class", "equal tall");
    }
    if (bdk === "0") {
      link.setAttribute("class", "wide shift");
    }
    if (bdk === ".") {
      link.setAttribute("class", "shift");
    }

    button.addEventListener("click", () => {
      let key = link.getAttribute("data-key");
      console.log(key);
      switch (key) {
        case "equal":
          let result = eval(calObj.data);
          calObj.data = result;
          calculatorScreen.innerHTML = calObj.data;
          calObj.data='0'
          console.log("equal");
          break;
        case "clear":
          clearScreen();
          calculatorScreen.innerHTML = calObj.data
          console.log("clear");
          break;
        default:
          if (calObj.data == "0") {
            calObj.data = "" + link.getAttribute('data-key')
          } else {
            calObj.data = calObj.data + link.getAttribute('data-key');
          }

          calculatorScreen.innerHTML = calObj.data;
          console.log("default");
          break;
      }
    });

    calculatorUl.appendChild(button);
    button.appendChild(link);
    i++;
  });
}

// FUNCIONES //

function suma(a, b) {
  return a + b;
}

function resta(a, b) {
  return a - b;
}

function multiplicacion(a, b) {
  return a * b;
}

function division(a, b) {
  return a / b;
}

function clearScreen() {
  calObj.data = '0';
}

// MAIN FLOW //
