function kiir() {
    let valasz = document.getElementById("eredmeny")
    valasz.innerHTML = "<b>Hibás felhasználónév</b>"
    valasz.style.color = "red"
    valasz.style.backgroundColor = "#EEEE00"
}

function terulet(a, b) {
    let valasz = document.getElementById("eredmeny")
    valasz.innerText = "A terület: " + a * b + " cm^2."
    valasz.style.color = "black"
    valasz.style.backgroundColor = "white"
}



