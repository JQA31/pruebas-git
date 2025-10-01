function filtrarPorTipo(obj, tipo) {
    let resultado = {}
    for (let clave in obj) {
        if (typeof obj[clave] === tipo) {
            resultado[clave] = obj[clave];
        }
    }
    return resultado;
}

let persona = {
    nombre: "Javier",
    edad: 21,
    casado: true,
}

console.log(filtrarPorTipo(persona, "boolean"));