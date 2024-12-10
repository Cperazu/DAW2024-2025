let arr1 = [1, 2, 3, 4, 5];
let arr2 = [2, 3, 1, 2];
function miFuncion(array_1, array_2, callback) {
  console.log("Array_1 :", array_1);
  console.log("Array_2 :", array_2);
  console.log("Esperando 3 segundos ...");

  setTimeout(() => {
    console.log('--------------------');
    callback(array_1, array_2);
  }, 3000);
}
function miCallback(array_1, array_2) {
  let totalArray_1 = 0;
  for (let i = 0; i < array_1.length; i++) {
    totalArray_1 += array_1[i];
  }
  let totalArray_2 = 0;
  for (let i = 0; i < array_2.length; i++) {
    totalArray_2 += array_2[i];
  }
  console.log(
    "Suma de todos los elementos de ambos arrays : ",
    totalArray_1 + totalArray_2
  );
  console.log('--------------------');
  
}
miFuncion(arr1, arr2, miCallback);