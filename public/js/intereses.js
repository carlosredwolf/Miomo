$(document).ready(function() {
    getPaises();
});

const getPaises = () => {
    $.ajax({
        type: "GET",
        url: "paises",
        data: "data",
        dataType: "Json",
        success: function(response) {
            for (var key in response) {
                let paises = `<option value="" selected disabled hidden>Select your country</option><option value="${response[key].code}">${response[key].name}</option>`;
                $("#select-pais").append(paises);
            }
        }
    });
}
$("#select-pais").change(function(e) {
    var select = document.getElementById('select-pais');
    var selectedOption = this.options[select.selectedIndex];
    $("#pais-input").val(selectedOption.text);
    enviarCodePais().then(function() {
        $('#pais-input').empty().append('');
        $('#estado-input').empty().append('');
        getEstados();
    });

});
$("#select-estado").change(function(e) {
    var select = document.getElementById('select-estado');
    var selectedOption = this.options[select.selectedIndex];
    $('#estado-input').empty().append('');
    $("#estado-input").val(selectedOption.text);
});



const enviarCodePais = () => {
    return new Promise((resolve, reject) => {
        var paisSelect = document.getElementById('select-pais');
        var paisCode = paisSelect.value;
        $.ajax({
            method: "POST",
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            url: "estados/" + paisCode,
            data: { content: paisCode },
            dataType: "text",
            cache: false
        });
        setTimeout(resolve, 500);
    });
}

const getEstados = () => {
    $('#select-estado').empty().append('');
    $.ajax({
        type: "GET",
        url: "estados",
        data: "data",
        dataType: "Json",
        success: function(response) {
            for (var key in response) {
                let estados = `<option value="" selected disabled hidden>Select your city</option><option value="${response[key].display}">${response[key].display}</option>`;
                $("#select-estado").append(estados);
            }
        }
    });
}

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

