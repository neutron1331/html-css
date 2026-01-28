/*

async funkce pracuje nezávisle na hlavním vlákně programu, což umožňuje provádění dalších operací, zatímco čeká na dokončení asynchronní úlohy.

*/

function sendPost(callback) //async function
{
    callback(result)
}

sendPost((result) => {console.log(result)});    //volání async funkce s callbackem

/*

callback funkce je funkce, která je předána jako argument jiné funkci a je volána (vykonána) po dokončení určité operace nebo události. Callbacky se často používají v asynchronním programování k zajištění, že určitý kód bude spuštěn až po dokončení asynchronní úlohy, jako je například načítání dat z API nebo čtení souboru.


Event 
*/

//Promises 

fetch("https://api.example.com")                        //nejdříve zavoláme fetch
    then(response => response.json())                   //poté převedeme odpověď na JSON
    .then(data => console.log(data))                    //nakonec pracujeme s daty
    .catch(error => console.error('Chyba:', error));    //zachytíme chyby

//vždy kdiž voláme něco vzdaleného (api, databáze...) tak použijeme async zápis


//Async / Await
async function fetchData() {
    try {
        const response = await fetch("https://api.example.com");    //čekáme na dokončení fetch
        const data = await response.json();                         //čekáme na převod na JSON
        console.log(data);                                          //práce s daty
    } catch (error) {
        console.error('Chyba:', error);                             //zachytíme chyby
    }
}

//tyto funkce se dají použít pro "fakování" dat

//"fakování" uživatelů

function fakeUsers(count) {                                     //ai zápis, pravděpodobně nefunguje (ale může)
    return new Promise((resolve, reject) => {
        const users = [];
        for (let i = 0; i < count; i++) {
            users.push({ id: i + 1, name: `User${i + 1}` });
        }
        resolve(users);
    });
}

