const database = {
  users: [
    { id: 1, name: "Usuario 1" },
    { id: 2, name: "Usuario 2" },
    { id: 3, name: "Usuario 3" },
  ],
};

function miPromesa(id) {
  return new Promise((resolve, reject) => {
    const user = database.users.find((u) => u.id === id);
    if (user) {
      resolve(user);
    } else {
      reject("User not found");
    }
  });
}

describe("DataBase Promises - selectUserById", () => {
  it("should gets user with id = 2", () => {
    miPromesa(2).then((u) => {
      u == { id: 2, name: "Usuario 2" };
    });
  });
  it("should gets user not found with id = 5", () => {
    miPromesa(5).catch((f) => {
      f == "User not found";
    });
  });
});
