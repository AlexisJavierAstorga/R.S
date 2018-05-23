function habilitar(form){
    if (form.estados[2].selected == true){
    form.municipio.disabled = false;
    form.delegacion.disabled = true;
    form.colonia.disabled = true;
    }else if(form.estados[1].selected == true){
    form.delegacion.disabled = false;
    form.colonia.disabled = false;
    }
}
