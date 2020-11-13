function validacao() {
	if (document.form.nome.value==""){

		alert ("Por favor, preencha o campo Nome.");
		document.form.nome.focus();
		return false; 

	}

	if (document.form.email.value==""){
		alert ("Por favor, preencha o campo Email.");
		document.form.email.focus();
		return false;
	}

	if (document.form.cpf.value==""){
		alert ("Por favor, preencha o campo CPF/CNPJ.");
		document.form.cpf.focus();
		return false;
	}

	if (document.form.ncard.value==""){
		alert ("Por favor, preencha o campo Numero do cartão.");
		document.form.ncard.focus();
		return false;
	}
	
	if (document.form.namecard.value==""){
		alert ("Por favor, preencha o campo Nome impresso no cartão.");
		document.form.namecard.focus();
		return false;
	}
	
	if (document.form.cvv.value==""){
		alert ("Por favor, preencha o campo CVV.");
		document.form.cvv.focus();
		return false;
	}
	
	if (document.form.pass.value==""){
		alert ("Por favor, preencha o campo Senha.");
		document.form.pass.focus();
		return false;
	}				

	if (document.form.pass2.value==""){
		alert ("Por favor, preencha o campo Confirma senha.");
		document.form.pass2.focus();
		return false;
	}	

	

}

function validar(){
	var pass = form.pass.value;
	var pass2 = form.pass2.value;

	if (pass != pass2){
		alert('Senhas diferentes');
		document.form.pass2.focus();
		return false;
	}
}
