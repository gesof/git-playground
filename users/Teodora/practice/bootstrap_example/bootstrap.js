class Painters{
    constructor(name) {
        this.name = name;
    }
}

class Botticelli extends Painters {
    constructor(name, number) {
        super(name);
        this.number = number;
    }
    show() {
        return this.name + ' has ' + this.number + ' very famous paintings.';
    }
}

mycar = new Botticelli("Botticelli", "3");
console.log(mycar.show());


