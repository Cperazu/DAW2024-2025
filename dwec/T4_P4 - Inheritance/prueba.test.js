import * as data from "../T4_P4 - Inheritance";

describe("Inheritance - Birth class", () => {
  it("should gets date and place of birth of Peter Jackson", () => {
    const birthInfo = data.m1.getDirector().getBirth();

    expect(birthInfo.getDate()).toBe("31 de octubre de 1961");
    expect(birthInfo.getPlace()).toBe("Pukerua Bay, Nueva Zelanda");
  });
});

describe("Inheritance - Director class", () => {
  it("should gets name, nationality and notableFilmography for Director", () => {
    const directorInfo = data.m1.getDirector();

    expect(directorInfo.getName()).toBe("Peter Jackson");
    expect(directorInfo.getNationality()).toBe("Neozelandés");
  });
});

describe("Inheritance - Movie class", () => {
  it("should gets title, year, genre, duration, rating, and synopsis for El Señor de los Anillos", () => {
    const movieInfo = data.m1;
    const movieTitleInfo = movieInfo.getTitle();

    expect(movieTitleInfo.getTitle()).toBe("El Señor de los Anillos: La Comunidad del Anillo");
    expect(movieInfo.getYear()).toBe(2001);
    expect(movieInfo.getGenre()).toBe("Fantasía");
    expect(movieInfo.getDuration()).toBe(178);
    expect(movieInfo.getRating()).toBe(9.2);
    expect(movieInfo.getSynopsis()).toBe(
        "Un hobbit llamado Frodo Baggins emprende un viaje épico para destriuir un anillo malévolo y evitar que caiga en manos del Señor Oscuro"
    );
  });
});
