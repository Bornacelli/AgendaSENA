$('#hijos').change(function(){
    if($('#hijos').val() == 'No'){
        $("#cantidadHijos").prop('readonly', true);
        $("#cantidadHijos").val(0);
    }else{
        $("#cantidadHijos").prop('readonly', false);
        $("#cantidadHijos").val('');
    }
})

$('#personasDependenEco').change(function(){
    if($('#personasDependenEco').val() == 'No'){
        $("#cantPersonasDependenEco").prop('readonly', true);
        $("#cantPersonasDependenEco").val(0);
    }else{
        $("#cantPersonasDependenEco").prop('readonly', false);
        $("#cantPersonasDependenEco").val('');
    }
})

$('#padeceEnfermedad').change(function(){
    if($('#padeceEnfermedad').val() == 'No'){
        $("#cualEnfermedad").prop('readonly', true);
        $("#cualEnfermedad").val('No Aplica');
    }else{
        $("#cualEnfermedad").prop('readonly', false);
        $("#cualEnfermedad").val('');
    }
})

$('#medicamentoPermanente').change(function(){
    if($('#medicamentoPermanente').val() == 'No'){
        $("#cualMedicamento").prop('readonly', true);
        $("#cualMedicamento").val('No Aplica');
    }else{
        $("#cualMedicamento").prop('readonly', false);
        $("#cualMedicamento").val('');
    }
})

$('#regimenAfiliacion').change(function(){
    if($('#regimenAfiliacion').val() == 'Ninguno_Afi'){
        $("#nombreEPS").prop('readonly', true);
        $("#nombreEPS").val('Ninguna');
    }else{
        $("#nombreEPS").prop('readonly', false);
        $("#nombreEPS").val('');
    }
})

$('#discapacidad').change(function(){
    if($('#discapacidad').val() == 'No'){
        $('#tipoDiscapacidad').html(`<option value="No Aplica">No Aplica</option>`);
    }else{
        $('#tipoDiscapacidad').html(`<option selected disabled value="">seleccione.. </option>
        <option value="Visual"> Visual </option>
        <option value="Auditiva"> Auditiva </option>
        <option value="Sordo/Ceguera"> Sordo - Ceguera </option>
        <option value="Fisica"> Fisica </option>
        <option value="Cognitiva"> Cognitiva </option>
        <option value="Psicosocial"> Psicosocial </option>
        <option value="Multiple"> Multiple </option>
        <option value="No Aplica"> No Aplica </option>`);
    }
})

$('#trabajaActualmente').change(function(){
    if($('#trabajaActualmente').val() == 'No'){
        $('#tipoTrabajo').html(`<option value="No Aplica">No Aplica</option>`);
    }else{
        $('#tipoTrabajo').html(`<option selected disabled value="">Seleccione.. </option>
        <option value="Independiente"> Independiente (Por su cuenta) </option>
        <option value="Dependiente"> Dependiente (Vínculo con una empresa) </option>
        <option value="Por Jornales"> Por Jornales (Por días) </option>
        <option value="Otro Trabajo"> Otros </option>
        <option value="No Aplica"> No Aplica </option>`);
    }
})