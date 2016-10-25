$(document).ready(function(){
    //RESPNSAVEL PELA DEMONSTRAÇÃO DOS DADOS DO CLIENTE//
    
    $("#importancia span").click(function(){
        var id_click = $(this).attr('id');
        $("#importancia span").each(function(){
            
            $(this).removeClass("glyphicon-star");
            $(this).addClass("glyphicon-star-empty");
        
            var id = parseInt($(this).attr("id"));
            if(id <= id_click){
                $(this).removeClass("glyphicon-star-empty");
                $(this).addClass("glyphicon-star");
            }
        });
    });
    
    $("#tb_clientes tbody tr")
            .mouseover(function(){
                $(this).css({
                    'background-color':'#CCC',
                    'cursor': 'pointer'
                })
            }).mouseout(function(){
                $(this).removeAttr('style')
            }).click(function(){
                $("#nome").text("Nome: "+$(this).find(".nome").text());
                $("#cpf").text("CPF: "+$(this).find(".cpf").text());
                $("#end").text("END: "+$(this).find(".end").text());
                $("#cel").text("CEL: "+$(this).find(".cel").text());
                $("#end_cobranca").text($(this).find(".endCobranca").text());
                $("#modal-informacao").modal();
            });
            
    //ORDENAÇÃO DE TABELAS
     //Parser para configurar a data para o formato do Brasil
	$.tablesorter.addParser({
		id: 'datetime',
		is: function(s) {
			return false; 
		},
		format: function(s,table) {
			s = s.replace(/\-/g,"/");
			s = s.replace(/(\d{1,2})[\/\-](\d{1,2})[\/\-](\d{4})/, "$3/$2/$1");
			return $.tablesorter.formatFloat(new Date(s).getTime());
		},
		type: 'numeric'
	});

	$('.tablesorter').tablesorter({
        // Envia os cabeçalhos 
        headers: { 
            6: {
                // Ativa o parser de data na coluna 6 (começa do 0) 
                sorter: 'datetime' 
            },
            7: {
                // Ativa o parser de data na coluna 6 (começa do 0) 
                sorter: 'datetime' 
            }
        },
		// Formato de data
		dateFormat: 'dd/mm/yyyy'
	});
});


