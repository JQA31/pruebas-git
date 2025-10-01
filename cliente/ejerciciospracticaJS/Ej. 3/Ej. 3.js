let mensaje = prompt("Escribe un numero", "Escribelo aqui");
if (isNaN(mensaje)) {
    console.log("Escribe un numero hombre");
} else {
    if (parseInt(mensaje) % 2 == 0) {
        console.log("El numero es par");
    } else {
        console.log("El numero es impar");
    }
}