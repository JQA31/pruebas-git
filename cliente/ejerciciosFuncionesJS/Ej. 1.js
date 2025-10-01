function comparacion(a, b, c) {
    return (a < b && a < c) ? a : (b < a && b < c) ? b : c
}
let a = 4, b = 23, c = -32;
console.log("El numero mas bajo es el " + comparacion(a, b, c));