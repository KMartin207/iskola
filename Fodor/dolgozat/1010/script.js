function haromszogEll(a, b, c) {
    let lehet = "Nem, nem szerekeszthető!"
    if ((a + b > c) && (a + c > b) && (b + c > a)) {
        lehet = "Igen, szerkeszthető!"
    }

    return lehet;

}

function keruletSzamol(r) {
    let kerulet = 2 * r * 3.14;
    return kerulet;
}

function teruletSzamol(r) {
    let terulet = (r * r) * 3.14;

    return terulet;
}


function adatker() {
    let a = Number(document.getElementById("a").value)
    let b = Number(document.getElementById("b").value)
    let c = Number(document.getElementById("c").value)

    document.getElementById("kiir").innerText = haromszogEll(a, b, c);
    

}


function adatsugarLeker() {
    
    let r = Number(document.getElementById("sugar").value)

    document.getElementById("kerulet").innerHTML = keruletSzamol(r);
    document.getElementById("terulet").innerHTML = teruletSzamol(r);
}