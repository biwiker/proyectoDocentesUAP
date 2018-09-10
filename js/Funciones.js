$(document).on('keyup', '#txt_filtrar_docente', function (event) {
    event.preventDefault();
    buscar_datos($(this).val()); 
});

function buscar_datos(consulta) {
    idEscuela = document.getElementById("ddlEscuela").value;

    $.ajax({
        url: '../capaLogicaNegocio/BO_Docentes.php',
        type: "POST",
        dataType: 'html',
        data: {'ddlEscuela': idEscuela,
            'consulta': consulta
        },
        success: function (response) {

            $("#contenedor-info-docente").html(response);
        }
    });
}


 





