let numero;
do {
    numero = prompt("Hasta donde cuento?", "Escribe aqui");
} while (isNaN(numero) || numero < 1);

const mostrarPatron = n => {
    for (let i = 1; i <= n; i++) {
        let linea = "";
        for (let j = 1; j <= i; j++) {
            linea += j;
        }
        console.log(linea);
    }
};

mostrarPatron(parseInt(numero));