let arr = [1, 2, 3, 4];
function miFuncion(array, callback) {
  console.log("Array original: ", array);
  console.log("Esperando 6 segundos ...");

  setTimeout(() => {
    callback(array);
  }, 6000);
}
function miCallback(array) {
  let newArray = [];
  for (let i = 0; i < array.length; i++) {
    newArray[i] = array[i] * 2;
  }
  console.log("Array modificado: ", newArray);
  return newArray;
}

miFuncion(arr, miCallback);
