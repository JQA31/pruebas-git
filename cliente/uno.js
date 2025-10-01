"use strict";
let nombre = "Alvaro";
let colorFavorito = "Rojo";
let edad = 23;
const CONFIG = {
    url: "http://www.google.com",
    api: "123456789"
};
console.log(nombre + "\n" + colorFavorito + "\n" + edad + "\n" + CONFIG.api);
let nombre2 = prompt("Cual es tu nombre?", "Escribe aqui");
console.log("Hola, " + nombre2);
