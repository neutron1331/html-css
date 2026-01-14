//tvorba třídy Auto 
class Auto {
    //konstruktor třídy
    constructor(znacka, model, rokVyroby) {
        this.znacka = znacka;
        this.model = model;
        this.rokVyroby = rokVyroby;
    }

    //metoda pro zobrazení informací o autě
    zobrazInfo() {
        console.log(`Auto: ${this.znacka} ${this.model}, Rok výroby: ${this.rokVyroby}`);
    }
}

/*

klíčové slovo "class." slouží k definování třídy v JavaScriptu. Třída je šablona pro vytváření objektů, která může obsahovat vlastnosti (atributy) a metody (funkce). V tomto příkladu jsme vytvořili třídu "Auto" s konstruktorovou metodou pro inicializaci vlastností "znacka", "model" a "rokVyroby". Dále jsme přidali metodu "zobrazInfo", která vypisuje informace o autě do konzole.
metoda "constructor()" je speciální metoda, která se automaticky volá při vytváření nové instance třídy. Slouží k inicializaci vlastností objektu.
tvorba vlastních metod
klíčové slovo "strict" je používáno k zapnutí přísného režimu v JavaScriptu, který pomáhá odhalit běžné chyby a problémy v kódu tím, že zavádí přísnější pravidla pro psaní kódu.
dědění tříd (class Model extends Car)
private, public, protected -> stejné jako v c#

*/