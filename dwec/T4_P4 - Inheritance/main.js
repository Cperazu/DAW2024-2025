import { birth } from "./classes/title/director/birth/birth.class";
import { title } from "./classes/title/title.class";
import { director } from "./classes/title/director/director.class";
import { movie } from "./classes/title.movie/movie.class";

export const b1 = new birth(
  "31 de octubre de 1961",
  "Pukerua Bay, Nueva Zelanda"
);
export const d1 = new director("Peter Jackson", "Neozelandés", b1, [
  "El Señor de los Anillos",
  "El Hobbit",
  "King Kong",
]);
export const t1 = new title("El Señor de los Anillos: La Comunidad del Anillo");

export const m1 = new movie(
  t1,
  d1,
  2001,
  "Fantasía",
  178,
  9.2,
  "Un hobbit llamado Frodo Baggins emprende un viaje épico para destriuir un anillo malévolo y evitar que caiga en manos del Señor Oscuro"
);
