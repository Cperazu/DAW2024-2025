export const arr = ["study", "buy", "sleep", "play"];
export function miFuncion(array, callback) {
  console.log("arr : ", array);
  console.log("---------------------");
  return callback(array);
}
export function miCallback(array) {
  let result = "My tasks list:";
  for (let i = 0; i < array.length ; i++) {
    result += " " + array[i];
    console.log(result); 
  }
  return result;
}