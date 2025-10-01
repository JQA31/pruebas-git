let sueldo;
let antiguedad;
let nuevoSueldo;
do {
    sueldo = prompt("Cuanto va a ganar el empleado?", "Escribe aqui");
}while (isNaN(sueldo));
do {
    antiguedad = prompt("Cuantos anios lleva el empleado?", "Escribe aqui");
}while (isNaN(antiguedad));
nuevoSueldo = (sueldo < 500 && antiguedad >= 10) ? parseInt(sueldo) + (parseInt(sueldo)*0.2) : 
              (sueldo < 500 && antiguedad < 10) ? parseInt(sueldo) + (parseInt(sueldo)*0.05) :
              parseInt(sueldo);
console.log("El nuevo sueldo del empleado es " + nuevoSueldo); 