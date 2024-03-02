window.onload = function () {
    // Získanie veku od užívateľa
    var vek = prompt("TÁTO STRÁNKA JE 18+ Prosím, zadajte svôj vek:");

    // Kontrola veku
    if (vek === null || isNaN(vek) || parseInt(vek) < 18) {
        // Užívateľ je mladší než 18 rokov, zavrie sa okno
        window.location.href = "https://www.google.com";
    } else {
        // Užívatel je starší než 18 rokov, môže pokračovať 
        alert("Vitajte na stránke!");
    }
};