let edad = 19;
let mensaje = edad >= 18 ? "Eres mayor de edad" : "Eres menor de edad";
console.log(mensaje); // "Eres mayor de edad"



let altura = 0;

// Con ||, el 0 se considera falso
let alturaA = altura || 100; // 100

// Con ??, solo null/undefined activan el valor alternativo
let alturaB = altura ?? 100; // 0



let frutas = ["Manzana", "Plátano", "Naranja", "Fresa"];
for (let i = 0; i < frutas.length; i++) {
console.log(`Fruta ${i+1}: ${frutas[i]}`);
}

// Salida:
// Fruta 1: Manzana
// Fruta 2: Plátano
// Fruta 3: Naranja
// Fruta 4: Fresa