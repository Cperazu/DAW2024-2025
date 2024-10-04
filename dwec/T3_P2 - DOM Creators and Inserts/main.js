const myBody = document.querySelector("body");

const newImg = document.createElement("img");
const newH1 = document.createElement("h1");
const newP01 = document.createElement("p");
const newP02 = document.createElement("p");

newImg.setAttribute('src', "./img_la.jpg");
newImg.setAttribute("alt", "LA")
newH1.textContent = "This is a Heading";
newP01.textContent = "This is a paragraph";
newP02.textContent = "This is another paragraph";

myBody.appendChild(newImg);
myBody.appendChild(newH1);
myBody.appendChild(newP01);
myBody.appendChild(newP02);
