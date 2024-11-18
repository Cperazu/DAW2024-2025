const database = {
    users: [
        {id: 1, name: "Usuario 1"},
        {id: 2, name: "Usuario 2"},
        {id: 3, name: "Usuario 3"},
    ],
};

function miPromesa(id){
    let userID = id
    let user;

    database.users.forEach((u) => {
        if(u.id==userID){
            user = u
        }
    })

    return new Promise((resolve,reject) => {
        if(user!=undefined){
            resolve(user)
        } else {
            reject('no se ha encontrado al usuario indicado')
        }
    })
}