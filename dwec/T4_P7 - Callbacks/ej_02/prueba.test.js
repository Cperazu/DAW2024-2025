import { arr, miCallback, miFuncion } from "./main"

describe('CALLBACKS 02', () => {
    it('Should gets "My tasks list: study buy sleep play", when pass [study, buy, sleep, play]', () => {
        expect(miFuncion(arr, miCallback)).toBe("My tasks list: study buy sleep play")
    })
})