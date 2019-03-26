function contact_form(){
	var name = $('#name').val();
	var email = $('#email').val();
	var paragraphe = $('#paragraphe').val();

	// alert(name+' '+email+' '+paragraphe);

	$.ajax({
		type:'post',
		url:'contact-back.php',
		data:{name:name,email:email,paragraphe:paragraphe},
		datatype: 'JSON',
		success: function(){
			document.getElementById('alert').innerHTML = 'Votre Message a ete bien envoye';
		}, error: function(){
			document.getElementById('alert').innerHTML = 'Votre Message n\'a pas ete envoye';
		}
	});

	document.getElementById('name').value = "";
	document.getElementById('email').value = "";
	document.getElementById('paragraphe').value = "";

}