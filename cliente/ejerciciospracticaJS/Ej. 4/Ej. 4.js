let mensaje;
do {
    mensaje = prompt("En que año naciste", "Escribelo aqui formato XXXX");
}while (isNaN(mensaje) || mensaje.length != 4 || parseInt(mensaje) >= 2025);
console.log("Tienes " + (2025 - parseInt(mensaje)) + " anios");