export let arr1 = [1, 2, 3, 4, 5];
export let arr2 = [2, 3, 1, 2];
export function miFuncionCallback() {
  let total_arr1 = 0;
  for (let i = 0; i < arr1.length; i++) {
    total_arr1 += arr1[i];
  }
  let total_arr2 = 0;
  for (let i = 0; i < arr2.length; i++) {
    total_arr2 += arr2[i];
  }
  return total_arr1 + total_arr2;
}
export function miFuncionMain(array_1, array_2, callback) {
  console.log("array_1 :", array_1);
  console.log("array_2 :", array_2);
  return callback();
  console.log("----------------");
}