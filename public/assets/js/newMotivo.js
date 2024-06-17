async function crearPatron(direccion){
  const marca = await direccion.replace("numero","[0-9]+");
  let patron = new RegExp(marca);
  if(patron.test(document.body.baseURI)){
  mostrarOtro();
  }
}
function mostrarOtro() {
    let select = document.getElementById("motivo");
    let otroCampo = document.getElementById("otroMotivoField");
    let otroInput = document.getElementById("otroMotivo");

    if (select.value === "otro") {
      otroCampo.style.display = "block";
      otroInput.required = true;
    } else {
      otroCampo.style.display = "none";
      otroInput.required = false;
    }
}