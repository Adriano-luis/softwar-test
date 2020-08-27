$(function(){
	$('#changeuf').on('change', function(){
		var prophp = $(this).serialize();
		console.log(prophp);
		
		$.ajax({
			type:'GET',
			url:'http://localhost/Softwar/Paginas/ajax.php',
			data:prophp,
			dataType:'json',
			success:function(json){
				alert('deu certo!');
			},
			error:function(){
				alert('Algo deu errado!');
			}
		});
		
	})
});