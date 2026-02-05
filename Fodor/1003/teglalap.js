
function terulet(a, b) {
    if ((a <= 0) || ( b <= 0 )) {
        return "Nullánál nagyobb számot adj meg!"
    }
    else {
        return "A terület: " + a * b
    }
     
}

function kerulet(a, b) {
    if ((a <= 0) || ( b <= 0 )) {
        return "Nullánál nagyobb számot adj meg!"
    }
    else {
        return "A kerület: " + 2 * ( a + b )
    }
     
}

document.querySelector("input[type='button']").addEventListener("click", function() {
    let oldal1 = Number(document.getElementById("a").value)
    let oldal2 = Number(document.getElementById("b").value)
    eredmeny.innerHTML = terulet(oldal1, oldal2)
    eredmeny.innerHTML += "<br>" + kerulet(oldal1, oldal2)
})  

  
