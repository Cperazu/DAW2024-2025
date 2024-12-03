export class book {

    #title
    #author
    published

    constructor(title, author, published) {
        this.#title=title
        this.#author=author
        this.published=published
    }

    getTitle(){
        return this.#title;
    }

    getAuthor(){
        return this.#author;
    }
    
    getpublished(){
        return this.published;
    }
}

export const  l1 = new book('La vida del lazarillo de Tormes', 'Anonymous', '1554');
export const  l2 = new book('The NeverEnding Story', 'Michael Ende', '1984');
export const  l3 = new book('The Lord of the Rings', 'J. R. R. Tolkien', '1954');
export const  l4 = new book('Beowulf', 'Anonymous', '900');