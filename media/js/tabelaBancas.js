$(document).ready(function() {
	$('#bancas').DataTable( {
		"bDeferRender": true,
		"sPaginationType": "full_numbers",
		"ajax": {
			"url": "functionBuscarBanca.php",
        	"type": "POST"
		},
		"columns": [
			{ "data": "titulo" },
			{ "data": "id_autor1" },
			{ "data": "id_autor2" },
			{ "data": "id_autor3" },
			{ "data": "id_autor4" },
			{ "data": "id_profPresidente" },
			{ "data": "profOrientador" },
			{ "data": "id_profConvidado" },
			{ "data": "data" },
            { "data": "horario" },
            { "data": "local" },
			{ "data": "acciones"}
			],
		"oLanguage": {
            "sProcessing":     "Procesando...",
		    "sLengthMenu": 'Exibir <select>'+
		        '<option value="05">05</option>'+
		        '<option value="10">10</option>'+
		        '<option value="20">20</option>'+
		        '<option value="30">30</option>'+
		        '<option value="40">40</option>'+
		        '<option value="50">50</option>'+
		        '<option value="-1">All</option>'+
		        '</select> registros',
		    "sZeroRecords":    "Nenhum resultado encontrado",
		    "sEmptyTable":     "A tabela está vazia",
		    "sInfo":           "Mostrando do (_START_ ao _END_) de um total de _TOTAL_ registros",
		    "sInfoEmpty":      "Mostrando de 0 a 0 de um total de 0 registros",
		    "sInfoFiltered":   "(filtrado de um total de _MAX_ registros)",
		    "sInfoPostFix":    "",
		    "sSearch":         "Buscar:",
		    "sUrl":            "",
		    "sInfoThousands":  ",",
		    "sLoadingRecords": "Por favor espere - carregando...",
		    "oPaginate": {
		        "sFirst":    "Primero",
		        "sLast":     "Último",
		        "sNext":     "Próximo",
		        "sPrevious": "Anterior"
		    },
		    "oAria": {
		        "sSortAscending":  ": Clique para ordenar de forma crescente",
		        "sSortDescending": ": Clique para ordenar de forma decrescente"
		    }
        }
	});
});
