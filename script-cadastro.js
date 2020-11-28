
function validar() {

  var s1 = cadastrojanis.senha.value;
  var s2 = cadastrojanis.senha2.value;
  if (s1 == s2) {
    alert("Cadastrado com sucesso!");
    return true;

  } else {
    alert("Senhas incorretas. Por favor verifique o valor digitado!");
    document.cadastrojanis.senha2.focus();
    return false;
  }
}

   
function cadastro() {
    addItem();
}

function addItem() {
    const nome = document.getElementById("nome").value;
    const email = document.getElementById("email").value;
    const cpf = document.getElementById("cpf").value;
    const senha = document.getElementById("senha").value;

    const nomeobj = JSON.stringify({nome});
    const emailobj = JSON.stringify({email});
    const cpfobj = JSON.stringify({cpf});
    const senhaobj = JSON.stringify({senha});

    sessionStorage.setItem('nome', nomeobj);
    sessionStorage.setItem('email', emailobj);
    sessionStorage.setItem('cpf', cpfobj);
    sessionStorage.setItem('senha', senhaobj);
}
