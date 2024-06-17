
$(document).ready(function(){

  recargarListaMunicipios();

  $('#listaDepartamentos').change(function(){
    recargarListaMunicipios();
  })

  $.ajax({
      url: '/departamentos',
      method: 'POST',
      data:  $('#formDepartamentos').serialize()
  }).done(function(response){
    let departamentos = JSON.parse(response);
    let template = '';
    departamentos.forEach(departamento => {
        template += `<option value="${departamento.id}">${departamento.departamento}</option>`
    });
    $('#listaDepartamentos').html(`<option selected disabled value="">Seleccione.. </option> ${template}`);

  });

})

function recargarListaMunicipios(){
  let valor = $('#listaDepartamentos').val();
  $('#hiddenDepartamento').val(valor);

  $.ajax({
    url: '/municipios',
    method: 'POST',
    data:  $('#formMunicipios').serialize()
  }).done(function(response){

    let municipios = JSON.parse(response);
    let template = '';
    municipios.forEach(municipio => {
      template += `<option value="${municipio.id}">${municipio.municipio}</option>`
    });
    $('#listaMunicipios').html(`<option selected disabled value="">Seleccione.. </option> ${template}`);
  });
}
