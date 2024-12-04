import { describe } from "node:test";
import * as data from "./main";

describe("OPP Person", () => {
  it("should gets name, surname, country and age", () => {
    expect(data.p1.getName()).toBe("John");
    expect(data.p1.getSurname()).toBe("Doe");
    expect(data.p1.getCountry()).toBe("USA");
    expect(data.p1.getAge()).toBe(32);
  });
  it("should sets name = Peter, surname = Jackson, country = CANADA and age = 39", () => {
    expect(data.p1.setName("Peter")).toBe("Peter");
    expect(data.p1.setSurname("Jackson")).toBe("Jackson");
    expect(data.p1.setCountry("CANADA")).toBe("CANADA");
    expect(data.p1.setAge(39)).toBe(39);
  });
});
