/* -----------------------------------------------------------
 * Úloha 70: Validace e-mailu
 * Napiš regulární výraz pro validaci e-mailové adresy.
 * Implementuj funkci validateEmail(email), která vrátí true/false
 * podle toho, zda je e-mail validní.
 *
 * Procvičuje: základní regex, escapování teček, testování pomocí test()
 * ----------------------------------------------------------- */

// zde bude vaše řešení

function validateEmail(email)
{
    const regex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}/;
    return regex.test(email);    
}


/* -----------------------------------------------------------
 * Úloha 71: Hledání čísel v textu
 * Vytvoř regulární výraz, který najde všechna čísla v textu.
 * Implementuj funkci findNumbers(text), která vrátí pole čísel.
 *
 * Procvičuje: kvantifikátory +, globální modifikátor g, match()
 * ----------------------------------------------------------- */

// zde bude vaše řešení


/* -----------------------------------------------------------
 * Úloha 72: Formátování data
 * Napiš regex, který zachytí datum ve formátu DD.MM.YYYY a převede
 * ho pomocí replace() na formát YYYY-MM-DD.
 *
 * Procvičuje: skupiny (), backreference $1-$3, replace()
 * ----------------------------------------------------------- */

// zde bude vaše řešení


/* -----------------------------------------------------------
 * Úloha 73: Validace hesla
 * Napiš regex, který ověří, že heslo obsahuje:
 * - min. 8 znaků
 * - velké písmeno
 * - malé písmeno
 * - číslici
 * - speciální znak
 *
 * Procvičuje: lookaheads, kombinace skupin, komplexní validace
 * ----------------------------------------------------------- */

// zde bude vaše řešení


/* -----------------------------------------------------------
 * Úloha 74: Extrakce HTML tagů
 * Pomocí regexu vyber všechny HTML tagy včetně jejich obsahu.
 * Implementuj funkci extractTags(html), která vrátí pole tagů.
 *
 * Procvičuje: nežravé kvantifikátory *?, globální match
 * ----------------------------------------------------------- */

// zde bude vaše řešení


/* -----------------------------------------------------------
 * Úloha 75: Čištění textu
 * Vytvoř dva regexy:
 * 1. pro nahrazení vícenásobných mezer jednou
 * 2. pro odstranění speciálních znaků
 *
 * Implementuj funkci cleanText(text).
 *
 * Procvičuje: skupiny znaků [], řetězení replace()
 * ----------------------------------------------------------- */

// zde bude vaše řešení


/* -----------------------------------------------------------
 * Úloha 76: Parsování CSV
 * Pomocí regexu rozparsuj CSV s hodnotami v uvozovkách.
 * Cílem je vrátit strukturovaná data.
 *
 * Procvičuje: matchování textu s ohledem na uvozovky, skupiny (), g
 * ----------------------------------------------------------- */

// zde bude vaše řešení


/* -----------------------------------------------------------
 * Úloha 77: Validace kreditní karty
 * Napiš regex pro validaci čísel kreditních karet (Visa, MasterCard).
 * Ignoruj mezery ve vstupu.
 *
 * Procvičuje: alternativy, různé délky, escapování mezer
 * ----------------------------------------------------------- */

// zde bude vaše řešení


/* -----------------------------------------------------------
 * Úloha 78: Minifikace CSS
 * Implementuj funkci minifyCSS(css), která:
 * 1. odstraní CSS komentáře
 * 2. odstraní zbytečné mezery
 *
 * Procvičuje: použití regexu pro odstranění bloků, whitespace cleanup
 * ----------------------------------------------------------- */

// zde bude vaše řešení


/* -----------------------------------------------------------
 * Úloha 79: Analyzátor logů
 * Pomocí regexu extrahuj logy ve formátu:
 * [TIMESTAMP] LEVEL: MESSAGE
 *
 * Cílem je získat timestamp, úroveň a zprávu.
 *
 * Procvičuje: skupiny (), kapturní skupiny, match()
 * ----------------------------------------------------------- */

// zde bude vaše řešení


/* -----------------------------------------------------------
 * Úloha 80: Jednoduchý template engine
 * Napiš regex, který najde {{promenne}} a nahradí je hodnotami
 * z objektu data.
 *
 * Procvičuje: zachytávací skupiny, callback v replace()
 * ----------------------------------------------------------- */

// zde bude vaše řešení


/* -----------------------------------------------------------
 * Úloha 81: Validace českého telefonního čísla
 * Podporované formáty:
 * - +420 123 456 789
 * - 123 456 789
 * - 604123456
 *
 * Procvičuje: nepovinný prefix, alternativy, čištění whitespace
 * ----------------------------------------------------------- */

// zde bude vaše řešení


/* -----------------------------------------------------------
 * Úloha 82: Rozdělení camelCase na slova
 * Napiš regex, který rozdělí camelCase text na slova.
 * Např. "camelCaseText" → "camel Case Text"
 *
 * Procvičuje: lookahead/lookbehind nebo skupiny, replace()
 * ----------------------------------------------------------- */


// zde bude vaše řešení