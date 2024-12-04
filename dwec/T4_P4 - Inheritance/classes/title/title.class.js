export class title {
    #title
    
    constructor(title) {
        this.#title = title
    }

    getTitle(){
        return this.#title
    }

    setTitle(title){
        this.#title = title
        return this.#title 
    }
}