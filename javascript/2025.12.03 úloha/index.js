//uživatel zadává číslo, které se ukládá do pole, po zadání 0 se zadávání ukončí
//poté do konzole vypíše největší číslo, průměr, počet sudých a lychých čísel

let pole = [];
let vstup = 0;
let i = 0;
let max_num = 0;
let sum = 0, prum = 0;
let sud=0, lich=0;

do {
    i++;
    vstup = Number(prompt("zadejte " + i + ". cislo:"));
    //console.log(vstup + " " + i);
    if (i == 1)
    {
        max_num = vstup;
    }
    else if (max_num < vstup)
        max_num = vstup;
    sum += vstup;
    if (vstup % 2 == 0)
        sud++;
    else lich++;        
    
} while (vstup != 0);
sud--;
i--;
prum = sum / i;

console.log("největší číslo je: " + max_num);
console.log("průměr je: " + prum);
console.log("počet sudých čísel je: " + sud);
console.log("počet lichých čísel je: " + lich);
//console.log(sum);
