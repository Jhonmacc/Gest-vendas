//Todos os scritps





//Script puxa o mês ao clicar nos botões meses
$('.mes').on('click', function () {
  let mes = $(this).val();
  $('#recebeMes').val(mes);
  $('#formMes').submit();
}
)
//----------------------------------------------------------------------//

//Seleciona o produto e vem o preço no input valorProduto
$('.produto-type').on('change', function () {
  $('.price-input')
    .val(
      $(this).find(':selected').data('price')
    );
});

//Seleciona o tipo da venda e vem o valorProduto do benefício atribuido na value
$('.tipovenda-type').on('change', function () {
  $('.price-input')
    .val(
      $(this).find(':selected').data('price')
    );
});

// Ao marca o checkbox MF e vem o valorProduto atribuido na value


// Ao marca o checkbox Política de Garantia e vem o valorProduto atribuido na value

let checkbox3 = $('.selecionar2');
$(checkbox3).on('change', function () {

  if (checkbox3.is(':checked')) {

    $('.vendaManual').val('DESCONTO MANUAL'); 

}else{
  $('.vendaManual').val(); 
}

})

let checkbox4 = $('#tipoDesc3');
$(checkbox4).on('change', function () {

  if (checkbox4.is(':checked')) {

    $('#tipoDesc4').val('VENDA NORMAL'); 

}else{
  $('#tipoDesc4').val(); 
}
if ($('#tipoDesc3').is(":checked")) {
  $('#tipoDesc').val('VENDA NORMAL');

   }

});

// Ao marca a checkbox Desconto Serasa desabtiva o readonly pro editar valorProduto 
let checkbox5 = $('#tipoDesc4').click()
$(checkbox5).on('change',function () {

  if (checkbox5.is(':checked')) {
  $('.txtBloqueado').prop('readonly', false);
}else{
  $('.txtBloqueado').val(); 
}
if ($('#tipoDesc4').is(":checked")) {
  $('#tipoDesc').val('DESCONTO MANUAL');

   }


});


$('.descontoMF').change('change keyup blur', function () {
  if ($('#descMF2').is(":checked")) {
      

  
    $('#valor').val(inicial4)
  }
  if ($('#descMF').is(":checked")) {
    inicial3 = $('#valor').val(); 
    
  } else {
    $('#valor').val(inicial3); //ajusta para o valorProduto inicial
  }
  if ($('#descMF').is(":checked")) {
    $('#tipoDesc').val('Venda MF');

     }
});


$('.descontoMF2').click('keyup', function () {
  if ($('#descMF').is(":checked")) {
   
   
    $('#valor').val(inicial3)
  }
  if ($('#descMF2').is(":checked")) {
    inicial4 = $('#valor').val();
    $('#valor').val('VENDA GRATUITA'); //pega o valorProduto inicial antes de ser alterado
   
  } else {
    $('#valor').val(inicial4); //ajusta para o valorProduto inicial
  }
  if ($('#descMF2').is(":checked")) {
    $('#tipoDesc').val('VENDA GRATUITA');

     }

});




$('.desc1').change('change keyup blur', function () {
  if ($('#tipoDesc2').is(":checked")) {
   
    $('#valor').val(inicial2)
  }

  var bc = parseFloat($('#valor').val() != '' ? $('#valor').val() : 0); // bruto


  var d2 = parseFloat($('#tipoDesc1').val() != '' ? $('#tipoDesc1').val() : 0); // desconto 1

  // desconto 1 
  if ($('#tipoDesc1').is(":checked")) {
    inicial = $('#valor').val(); //pega o valorProduto inicial antes de ser alterado
    $('#valor').val((bc - (bc * (d2 / 100))).toFixed(2));
  } else {
    $('#valor').val(inicial); //ajusta para o valorProduto inicial
  }
  if ($('#tipoDesc1').is(":checked")) {
    $('#tipoDesc').val('10% DE DESCONTO');

     }

});




$('.desc2').click('keyup', function () {

  if ($('#tipoDesc1').is(":checked")) {

    $('#valor').val(inicial)
  }

  var br = parseFloat($('#valor').val() != '' ? $('#valor').val() : 0); // bruto


  var d1 = parseFloat($('#tipoDesc2').val() != '' ? $('#tipoDesc2').val() : 0); // desconto 1

  // desconto 2

  if ($('#tipoDesc2').is(":checked")) {
    inicial2 = $('#valor').val(); //pega o valorProduto inicial antes de ser alterado
    $('#valor').val((br - (br * (d1 / 100))).toFixed(2));
  } else {
    $('#valor').val(inicial2); //ajusta para o valorProduto inicial
  }
  if ($('#tipoDesc2').is(":checked")) {
    $('#tipoDesc').val('20% DE DESCONTO');

     }

});

$(function(){
  $('input.checkgroup').click(function(){
     if($(this).is(":checked")){
        $('input.checkgroup').attr('disabled',true);
        $(this).removeAttr('disabled');
     }else{
        $('input.checkgroup').removeAttr('disabled');
     }
  })
})


/*DROPLIST DAS AGR */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

function filterFunction() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  div = document.getElementById("myDropdown");
  a = div.getElementsByTagName("a");
  for (i = 0; i < a.length; i++) {
    txtValue = a[i].textContent || a[i].innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      a[i].style.display = "";
    } else {
      a[i].style.display = "none";
    }
  }
}

            


