function valida(e){
    tecla = (document.all) ? e.keyCode : e.which;

    //Tecla de retroceso para borrar, siempre la permite
    if (tecla==8){
        return true;
    }

    // Patron de entrada, en este caso solo acepta numeros
    patron =/[0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}

    /*var total = 5
    var pare = $(this) .val() .length;
    if(pare > total)
    pare -= 1

    contar = total - pare
    $("#max") .text(contar)

    if(pare >= total){
      var stop = $(this) .val() .substring(0, total)
      $(this) .val(stop)
      alert ("Máximo de caracteres permitido")
    }
  })
})*/
