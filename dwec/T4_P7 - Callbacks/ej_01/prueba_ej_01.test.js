import { arr1, arr2, miFuncionCallback, miFuncionMain } from "./main"

describe('CALLBACKS', () => {
    it('should get 23, when adds [1,2,3,4,5] + [2,3,1,2]', () => {
        expect(miFuncionMain(arr1, arr2, miFuncionCallback)).toBe(23)
    })

})