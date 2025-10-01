/* function procesarEntrada(entrada, callback) {
// Procesamos la entrada
const resultado = entrada.toUpperCase();
// Llamamos al callback con el resultado
callback(resultado);
}

// Definimos una función que usaremos como callback
function mostrarResultado(texto) {
console.log("Resultado procesado: " + texto);
}

// Usamos la función con nuestro callback
procesarEntrada("hola mundo", mostrarResultado);
// Muestra: Resultado procesado: HOLA MUNDO */

const sumar = (a, b) => a + b;

const sumar2 = (a, b) => {
const resultado = a + b;
return resultado;
};