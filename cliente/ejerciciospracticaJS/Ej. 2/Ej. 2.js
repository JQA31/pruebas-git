let numero1;
let numero2;
let operador;
do {
    numero1 = prompt("Escribe el primer numero", "Escribe aqui");
} while (isNaN(numero1));
do {
    numero2 = prompt("Escribe el segundo numero", "Escribe aqui");
}while (isNaN(numero2));
do {
    operador = prompt("Escribe el operador","Aqui");
}while (operador != "+" && operador != "-" && operador != "*" && operador != "/");
let resultado;
switch (operador) {
    case "+":
        resultado = parseInt(numero1) + parseInt(numero2);
        break;
    case "-":
        resultado = parseInt(numero1) - parseInt(numero2);
        break;
    case "*":
        resultado = parseInt(numero1) * parseInt(numero2);
        break;
    case "/":
        resultado = parseFloat(numero1) / parseFloat(numero2);
        break;
}
console.log("El resultado es: " + resultado);