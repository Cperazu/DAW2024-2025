import { database, miPromesa } from "./main";

const datos = database;
describe("DataBase Promises - selectUserById", () => {
  it("should gets user with id = 2", async () => {
    await expect(miPromesa(2)).resolves.toEqual({ id: 2, name: "Usuario 2" });
  });
  it("should gets user not found with id = 5", async () => {
    const result = await miPromesa(5);
    await expect(miPromesa(5)).rejects.toBe("User not found");

    /* 

    ESTA MANERA SERÍA POR SI NO QUIERES USAR LOS HELPERS DE JEST COMO .rejects ya que al usar reject("User not found") 
    en el --if-- de la promesa, esta lanza un error que no se captura haciendo que la prueba falle. Por eso el uso de try-catch

    try {
      await miPromesa(5); // Esto debería lanzar un error
    } catch (error) {
      expect(error).toBe("User not found");
    } 

    ya que si usas la otra forma:

       const result = await miPromesa(5)
       expect(result).toBe("User not found")

    ..la prueba da fallo.   


    Tambien prodria haber puesto simplemente esto en el main.js:

            export function miPromesa(id) {
              return new Promise((resolve) => {
                onst user = database.users.find((u) => u.id === id);
                console.log('user: ',user);
            
                if (user) {
                  resolve(user);
                } else {
                  resolve("User not found");
                }
              });
            }

      ... de esta manera so se lanza ningun error ya que no uso reject, solo resolves
    */
  });
});
