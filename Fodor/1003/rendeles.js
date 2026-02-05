let prices = [300, 600, 1000, 800]

function szamol() {
    let index = document.getElementById("fruits").options.selectedIndex

    let db = Number(document.getElementById("quantity").value)

    result.innerHTML = "Egységár: " + prices[index] + "ft/kg"

    result.innerHTML += "<br>Fizetendő: " + prices[index] * db + "ft"
    
}






document.getElementById("fruits").onchange = szamol
document.getElementById("quantity").onchange = szamol