$("#tuser1").change(function() {
    if (this.checked) {
       var apostador = $('input:checkbox[id=tuser1]:checked').val();
       $("#apostador").val(apostador);

   } else {
    $("#apostador").val("null");
}
});

$("#tuser2").change(function() {
    if (this.checked) {
       var book = $('input:checkbox[id=tuser2]:checked').val();
       $("#book").val(book);

   } else {
    $("#book").val("null");
}
});

$("#tuser3").change(function() {
    if (this.checked) {
       var visitante = $('input:checkbox[id=tuser3]:checked').val();
       $("#visitante").val(visitante);

   } else {
    $("#visitante").val("null");
}
});
