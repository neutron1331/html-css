/* 31) Po kliknutí na tlačítko zobraz alert „Ahoj světe!“.
      - Vytvoř funkci, která zobrazí alert.
      - Použij událost onclick nebo addEventListener.
*/

document.getElementById("Alert_u31").addEventListener("click", alert_func_u31);
function alert_func_u31()
{
    alert("Ahoj světe!");
}


/* 32) Po kliknutí na tlačítko změň text vybraného HTML elementu.
      - Napiš funkci, která změní .textContent nebo .innerText.
      - Vyzkoušej použití arrow funkce.
*/

function Text_change_u32()
{
    add = (a,b) => a+b;
    change = () => "změněný text";
    document.getElementById("Text_u32").innerText = change();
}


/* 33) Vypiš do <div> aktuální čas, který se bude každou sekundu aktualizovat.
      - Použij setInterval a vlastní funkci pro získání času.
      - Funkce by měla vracet formátovaný čas (HH:MM:SS).
*/

setInterval(Time_func_u33,1000)
function Time_func_u33()
{
    let time = new Date().toLocaleTimeString();
    document.getElementById("Time_u33").innerHTML = time;
}


/* 34) Po kliknutí na tlačítko změň barvu pozadí celé stránky.
      - Vytvoř funkci s parametrem (barva).
      - Vyzkoušej nastavit hodnotu přes document.body.style.
*/

function Backround_change_blue_u34(){
    Backround_change_u34("blue");}
function Backround_change_red_u34(){
    Backround_change_u34("red");}
function Backround_change_white_u34(){
    Backround_change_u34("white");}

function Backround_change_u34(barva)
{
    document.body.style.backgroundColor = barva;
}


/* 35) Po najetí myší na obrázek ho zvětši.
      - Použij eventy mouseover a mouseout.
      - Změnu proveď pomocí třídy v CSS nebo style.width v JS.
*/

const image_u35 = document.getElementById("Img_u35");
image_u35.addEventListener("mouseover", Image_wide_func_u35);
image_u35.addEventListener("mouseout", Image_not_wide_func_u35);

function Image_wide_func_u35()
{
      image_u35.style.width = "100%";
}
function Image_not_wide_func_u35()
{
      image_u35.style.width = "10%";
}


/* 36) Po odeslání formuláře vypiš hodnoty inputů do konzole.
      - Zakázat přirozené odeslání formuláře pomocí event.preventDefault().
      - Použij funkci, která načte hodnoty inputů.
*/

const text1_id_u36 = document.getElementById("Input_text1_u36");
const text2_id_u36 = document.getElementById("Input_text2_u36");
function Formulář_u36()
{
      let text1_u36 = text1_id_u36.textContent;
      let text2_u36 = text2_id_u36.textContent;
      alert(text1_u36 + text2_u36)
}


/* 37) Vytvoř jednoduché „počítadlo kliknutí“.
      - Po každém kliknutí zvýší číslo o 1 a zobraz ho v HTML.
      - Proměnná se musí nacházet ve správném scope.
*/

let i_u37 = 0
let text_u37;
function Počítadlo_u37()
{
      i_u37++;
      text_u37 = "počet je: " + i_u37;
      document.getElementById("pocet_u37").innerHTML = text_u37;
}


/* 38) Po kliknutí na tlačítko skryj nebo zobraz text.
      - Můžeš použít classList.toggle().
      - Zvaž použití anonymní nebo arrow funkce.
*/

let bool_u38 = true;
function Hide_show_u38()
{
      if (bool_u38)
      {
            document.getElementById("text_u38").style.visibility = "collapse";
            bool_u38 = false;
      }
      else
      {            
            document.getElementById("text_u38").style.visibility = "visible";
            bool_u38 = true;
      }
}


/* 39) Validuj formulář – zkontroluj, jestli je vyplněné jméno a e-mail.
      - Pokud není validní, zobraz chybovou hlášku.
      - Použij jednoduchou podmínku a funkci validateForm().
*/

function ValidateForm()
{
      
}


/* 40) Pomocí slideru (input type="range") měň velikost písma textu.
      - Po změně hodnoty aktualizuj style.fontSize.
      - Hodnota ze slideru bude vstupním parametrem funkce.
*/
