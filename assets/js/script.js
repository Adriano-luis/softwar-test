$(function(){
	$('#changeuf').on('change', function(){
		var prophp = $(this).val();
		console.log(prophp);
		
		$.ajax({
			type:'GET',
			url:'http://localhost/Softwar/Paginas/ajax.php',
			data: {dado:prophp},
			dataType:'json',
			beforeSend:function(){
				$('#pop').html('<option>Carregando cidades...</option>');
			},
			success:function(json){
				console.log(json);
				console.log(json.cidades);
				$('#pop').html('<option>Selecione a sua cidade...</option>');

				if (json) {
					$.each(json, function(key,value){
						$('#pop').append('<option>'+value['nome']+'</option>');
					})
				}

			},
			error:function(){
				alert('Algo deu errado!');
			}
		});
		
	})
});