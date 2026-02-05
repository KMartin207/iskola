function kiir() {
    document.getElementById("eredmeny").innerHTML += "Kristálycukor"
}


//1. lehetőség
document.getElementById("gomb").onclick = kiir

//2. lehetőség
document.getElementById("gomb2").onclick = function() {
    eredmeny.innerText += "Névtelen függvény"
}

//3. lehetőség
document.getElementById("gomb3").addEventListener("click", kiir)

//4. lehetőség
document.getElementById("gomb4").addEventListener("click", function() {
    eredmeny.innerText += "addeventListener nevtelen"
})

//paraméteres függvény

function terulet(a, b) {
    return a * b
}

document.getElementById("gomb5").onclick = function() {
    
    eredmeny.innerText += terulet(4,5)
}

//Nyílfüggvény

document.getElementById("gomb6").addEventListener("click", () => {
    eredmeny.innerText = terulet(4,5)
})

