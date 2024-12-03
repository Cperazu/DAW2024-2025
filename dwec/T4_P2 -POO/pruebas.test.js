import * as poo from "./main";

describe("OOP", () => {
  it("should gets title, author and published for La vida del lazarillo de Tormes", () => {
    expect(poo.l1.getTitle()).toBe("La vida del lazarillo de Tormes");
    expect(poo.l1.getAuthor()).toBe("Anonymous");
    expect(poo.l1.getpublished()).toBe("1554");
  });
  it("should gets title, author and published for The NeverEnding Story", () => {
    expect(poo.l2.getTitle()).toBe("The NeverEnding Story");
    expect(poo.l2.getAuthor()).toBe("Michael Ende");
    expect(poo.l2.getpublished()).toBe("1984");
  });
  it("should gets title, author and published for The Lord of the Rings", () => {
    expect(poo.l3.getTitle()).toBe("The Lord of the Rings");
    expect(poo.l3.getAuthor()).toBe("J. R. R. Tolkien");
    expect(poo.l3.getpublished()).toBe("1954");
  });
  it("should gets title, author and published for Beowulf", () => {
    expect(poo.l4.getTitle()).toBe("Beowulf");
    expect(poo.l4.getAuthor()).toBe("Anonymous");
    expect(poo.l4.getpublished()).toBe("900");
  });
});
