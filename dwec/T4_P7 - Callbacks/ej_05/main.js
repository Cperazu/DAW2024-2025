const arr = ["study", "buy", "sleep", "play"];
function miFuncion(array, callback) {
  console.log("arr : ", array);
  console.log("Esperando 2 segundos ...");
  setTimeout(() => {
    return callback(array);
  }, 2000);
}
function miCallback(array) {
  let result = "My tasks list:";
  for (let i = 0; i < array.length; i++) {
    result += " " + array[i];
  }
  console.log("-----------------------------------");
  console.log(result);
  console.log("-----------------------------------");
  return result;
}

miFuncion(arr, miCallback)