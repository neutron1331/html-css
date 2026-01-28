/*

moduly v JavaScriptu slouží k organizaci kódu do samostatných souborů, které mohou exportovat a importovat funkce, objekty nebo hodnoty mezi sebou. 
    To umožňuje lepší strukturování kódu, opětovné použití a snadnější údržbu.

*/

//jak používat moduly

export function showError(message) {    //exportujeme funkci showError
    console.error(`Error: ${message}`);
}

// v HTML <script type="module" src="moduly.js"></script>   //při použití modulů je nutné v HTML souboru přidat atribut type="module" do tagu script



import { showError } from './moduly.js';   //importujeme funkci showError z moduly.js