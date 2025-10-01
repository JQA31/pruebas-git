let numero;
do {
    numero = prompt("Escribe un num del 1 al 10","Aqui");
}while(parseInt(numero) < 0 || parseInt(numero) > 10);
numeroInt = parseInt(numero);
switch (numeroInt) {
    case 0:
    case 1:
    case 2:
        console.log("Muy deficiente");
        break;
    case 3:
    case 4:
        console.log("Insuficiente");
        break;
    case 5:
        console.log("Suficiente");
        break;
    case 6:
        console.log("Bien");
        break;
    case 7:
    case 8:
        console.log("Notable");
        break;
    case 9:
    case 10:
        console.log("Sobresaliente");
        break;
}
