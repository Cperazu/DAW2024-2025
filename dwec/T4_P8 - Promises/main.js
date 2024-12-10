export const database = {
    users: [
        {id: 1, name: "Usuario 1"},
        {id: 2, name: "Usuario 2"},
        {id: 3, name: "Usuario 3"},
    ],
};
export function miPromesa(id){
        return new Promise((resolve,reject) => {
            const user = database.users.find((u) => u.id ===id);
            if(user){
                resolve(user)
            } else {
                reject('User not found')
            }
        })
}

