function pedirDatosUsuario() {
  const nombre = prompt("Nombre:");
  const correo = prompt("Correo electrónico:");
  return { nombre, correo };
}

const datos = pedirDatosUsuario();
console.log("Datos recibidos:", datos);
