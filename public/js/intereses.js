$(document).ready(function() {

});
const GuardarIntereses = () => {
    var visitante = $('input:checkbox[id=tuser3]:checked').val();
    var apostador = $('input:checkbox[id=tuser1]:checked').val();
    var book = $('input:checkbox[id=tuser2]:checked').val();
    var nombre_usuario = $('input:text[name=name]').val();
    var data = {
        visitante: visitante,
        apostador: apostador,
        book: book,
        nombre_usuario: nombre_usuario
    };
    console.log(data);
    $.ajax({
        type: "POST",
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        url: "savedatainteres",
        data: {
            visitante: visitante,
            apostador: apostador,
            book: book,
            nombre_usuario: nombre_usuario
        },
        dataType: "json",
        beforeSend: function() {
            console.log("Procesando, espere por favor...");
        },
        error: function() {
            console.log("Ha surgido un error.");
        },
        success: function(response) {
            console.log(response);
            //alert("Datos enviados correctamente")
        }
    });
}
$("#form-register").submit(function(event) {
    GuardarIntereses();
});