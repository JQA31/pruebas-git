let palabra;
let palabraTraducida;
do {
    palabra = prompt("Escribe la palabra a traducir", "Aqui");
}while(palabra != "casa" && palabra != "mesa" && palabra != "perro" && palabra != "gato")
palabraTraducida = (palabra == "casa") ? "house" : (palabra == "mesa") ? "table" :
                   (palabra == "perro") ? "dog" : "cat";
console.log(palabraTraducida);