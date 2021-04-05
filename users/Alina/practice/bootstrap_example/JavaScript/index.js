class Persoana{
        constructor(nume,prenume,varsta){
        this.nume = nume,
        this.prenume = prenume,
        this.varsta = varsta
    }

    age(){
        let date = new Date();
        return date.getvarsta()-this.varsta;
    }
};

let Persoana = new Persoana("Maria",2012);
document.getElementById("demo").innerHTML = "Varsta este" + Persoana.varsta +"ani"
;

class Angajat extends Persoana{
    constructor(nume,prenume,varsta,functie,salariu){
        super(persoana);
        this.functie = functie;
        thys.salariu = salariu;
    
    }

}
persoana = new Angajat("primar", "profesor");
document.getElementById("demo").innerHTML = persoana.age();