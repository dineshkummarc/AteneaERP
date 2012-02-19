$('#add_user button').click(function(){
	datos  =         $('#add_user input#user').val();
	datos += '&&&' + $('#add_user input#pass').val();
	datos += '&&&' + $('#add_user select#grupos').val();
	datos += '&&&' + $('#add_user input#options').val();
	datos += '&&&' + $('#add_user select#admin').val();
	alert(datos)
})
