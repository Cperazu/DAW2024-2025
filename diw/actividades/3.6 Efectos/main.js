const body = document.querySelector("body");
const botonOutline = body.querySelector("button[id=boton2]");
const divEfectos = body.querySelector('div[id=efectos]');

botonOutline.addEventListener("click", () => {
  const root = document.documentElement;
  const bgColorActual = getComputedStyle(root)
    .getPropertyValue("--color-fondo")
    .trim();

  if (bgColorActual == "white") {
    root.style.setProperty("--color-fondo", "black");
    root.style.setProperty("--color-texto", "white");
  } else {
    root.style.setProperty("--color-fondo", "white");
    root.style.setProperty("--color-texto", "black");
  }
});
