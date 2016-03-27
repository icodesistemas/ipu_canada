/*$(function(){
    $('.check-select').click(function(){

        var id = $(this).attr('id');
        $('.check-select').removeAttr('checked');
        $('#'+id).attr('checked', 'checked');
    });
})*/

function accionBoton(accion, url){
    var chck = false;
    var valor = "";
    $('.check-item').each( function() {

        if($(this).is(':checked')){
            chck = true;
            valor = $(this).attr('id');

        }
    });
    if(!chck){
        alert("Debe seleccionar una elemento de la lista");
        return;
    }
    if(accion == "actualizar"){
        location.href = url+'/'+valor;
    }else if(btn == "delete"){
        if(confirm('¿Desea eliminar el articulo?')){
            location.href = '/Content/language/list-language?sid=145534c243a7712429daf2837460e726df40c6b2&action=delete-language&language-indx='+valor;
        }


    }
}