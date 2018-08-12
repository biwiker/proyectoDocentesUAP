$(document).on('ready', funcionPrincipal);

function funcionPrincipal()
{
    $("#btnNuevo").on('click', funcionNuevaFila);
}

function funcionNuevaFila()
{
    $("#tablaAlineamiento")
            .append
            (
                    //casillas de texto
                    $('<tr>')
                    .append
                    (
                            $('<td>')
                            .append
                            (
                                    $('<input>').attr('type', 'text').addClass('form-control')
                                    )
                            )
                    .append
                    (
                            $('<td>')
                            .append
                            (
                                    $('<input>').attr('type', 'text').addClass('form-control')
                                    )
                            ).append
                    (
                            $('<td>')
                            .append
                            (
                                    $('<input>').attr('type', 'text').addClass('form-control')
                                    )
                            )
                    .append
                    (
                            $('<td>')
                            .append
                            (
                                    $('<input>').attr('type', 'text').addClass('form-control')
                                    )
                            ).append
                    (
                            $('<td>')
                            .append
                            (
                                    $('<input>').attr('type', 'text').addClass('form-control')
                                    )
                            )
                    .append
                    (
                            $('<td>')
                            .append
                            (
                                    $('<input>').attr('type', 'text').addClass('form-control')
                                    )
                            ).append
                    (
                            $('<td>')
                            .append
                            (
                                    $('<input>').attr('type', 'text').addClass('form-control')
                                    )
                            )
                    .append
                    (
                            $('<td>')
                            .append
                            (
                                    $('<input>').attr('type', 'text').addClass('form-control')
                                    )
                            ).append
                    (
                            $('<td>')
                            .append
                            (
                                    $('<input>').attr('type', 'text').addClass('form-control')
                                    )
                            )
                    .append
                    (
                            $('<td>')
                            .append
                            (
                                    $('<input>').attr('type', 'text').addClass('form-control')
                                    )
                            ).append
                    (
                            $('<td>')
                            .append
                            (
                                    $('<input>').attr('type', 'text').addClass('form-control')
                                    )
                            )
                    .append
                    (
                            $('<td>')
                            .append
                            (
                                    $('<input>').attr('type', 'text').addClass('form-control')
                                    )
                            )

                    //zona de los botones
                    .append
                    (
                            $('<td>').addClass('text-center')

                            .append
                            (
                                    $('<div>').addClass('btn btn-primary').text('Guardar')
                                    )
                            .append
                            (
                                    $('<div>').addClass('btn btn-danger').text('Eliminar')
                                    )
                            )
                    );

}
