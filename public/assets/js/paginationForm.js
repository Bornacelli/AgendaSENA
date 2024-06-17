
function pagination(idSeccion1,idSeccion2){
  let seccion1 = $(`#${idSeccion1}`);
  let campos = seccion1.find(".get-value");

  let allValue = 0
  let checkGroupValidate = 0;

  for (let i = 0; i < campos.length; i++) {
      id = campos[i].id;
      valor = $(`#${id}`).val();

      if(valor == '' || valor == null){
        $(`#${id}Alert`).removeClass("d-none");
        $(`#${id}Alert`).addClass("d-block");
      }else{
        $(`#${id}Alert`).removeClass("d-block");
        $(`#${id}Alert`).addClass("d-none");
        allValue++;
      }
  }

    if(seccion1.find('.group-check')){
      let checkGroup = seccion1.find('.group-check');

      for (let i = 0; i < checkGroup.length; i++) {
        let checkGroupId = checkGroup[i].id;
        let checkBox = $(`#${checkGroupId}`).find(".check-value");
        let checkEmpty = 0;

        for(let c = 0; c < checkBox.length; c++){
          let idCheckBox = checkBox[c].id;
          let checkValue = $(`#${idCheckBox}`).prop('checked');
          if(checkValue == false){
            checkEmpty++;
          }
        }

        if(checkEmpty == checkBox.length){
          $(`#${checkGroupId}Alert`).removeClass("d-none");
          $(`#${checkGroupId}Alert`).addClass("d-block");
        }else{
          $(`#${checkGroupId}Alert`).removeClass("d-block");
          $(`#${checkGroupId}Alert`).addClass("d-none");
          checkGroupValidate ++;
        }
        
      }

      if(checkGroupValidate == checkGroup.length && campos.length == allValue){
       
        if(idSeccion2 == ''){

          $('#encuestaPsicosocial').submit();

        }else{
          
          let seccion2 = $(`#${idSeccion2}`);
          seccion1.addClass("d-none");
          seccion2.removeClass("d-none");
          
        }
        
      }

    }if (campos.length == allValue){
      if(idSeccion2 == true){

        let seccion2 = $(`#${idSeccion2}`);
        seccion1.addClass("d-none");
        seccion2.removeClass("d-none");

      }
    }
}

function paginationOld(idSeccion1, idSeccion2){
  let seccion1 = $(`#${idSeccion1}`);
  let seccion2 = $(`#${idSeccion2}`);
  seccion1.removeClass("d-block");
  seccion1.addClass("d-none");
  seccion2.removeClass("d-none");
  seccion2.addClass("d-block");
}