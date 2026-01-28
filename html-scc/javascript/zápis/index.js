/*

pole: 

    let pole = [1,2,3]

    push - přidá dalí pole do pole
        pole.push(4) // pole je nyní [1,2,3,4]

    pop - odstraní poslední prvek pole
        pole.pop() // pole je nyní [1,2,3]

    shift - posune pole doprava
        pole.shift() // pole je nyní [2,3]

    map - vytvoří nové pole s upravenými prvky
        pole.map(x => x * 2) // vrátí [2,4,6]

    filter - vytvoří nové pole s prvky které splňují podmínku
        pole.filter(x => x > 1) // vrátí [2,3]

    find - najde první prvek který splňuje podmínku
        pole.find(x => x > 1) // vrátí 2

    sort - seřadí pole
        pole.sort((a,b) => b - a) // pole je nyní [3,2,1]

    count - vrátí počet prvků v poli
        pole.length // vrátí 3

obj:
    
    let obj = {a: 1, b: 2, c: 3} // klíč: hodnota
    let obj = {id: 1, name: "Jan", age: 30}

    k hodnotě se odkazujeme přes klíč

kolekce:

    let kolekce = []

Data:d = new Date()


Funkce:

    delkarace
    parametry a returns
    arrow funkce
    scope
    default parametry
    callback funkce


regex (https://regexr.com/):
    match - najde shody v textu
    replace - nahradí shody v textu
    search - najde pozici shody v textu

    \d - číslice
    \w - písmeno nebo číslice
    \s - mezera

    ????difikátory:
        + - jeden nebo více:
        * - nula nebo více:
        ? - nula nebo jeden:
        . - jakýkoliv znak
        {} - počet výskytů

    skupiny:
        () - zachycuje skupinu
        [] - jakýkoliv znak v závorce
         | - nebo

    modifikátory:
        /g - globální
        /i - case insensitive
        /s - dotall (tečka zahrnuje i nové řádky)
        /m - multiline (začátek a konec řádku)

       
let text = "Hello World! This is a test, 123 test1 test2 test3."

const reg1 = '/[A-Z]\w+/g'
const reg2 = '/\d /g'

let result1 = text.match(reg1) // najde všechna slova začínající velkým písmenem (Hello, World, This)
let result2 = text.match(reg2) // najde všechny číslice v textu (1,2,3)
let result3 = text.replace(reg2,"") // odstraní všechny číslice z textu

*/
