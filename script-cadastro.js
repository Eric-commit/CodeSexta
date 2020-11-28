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

function validar() {
  var senha1 = document.getElementById("senha");
  var senha2 = document.getElementById("senha2");
  var s1 = senha1.value;
  var s2 = senha2.value;
  if (s1 == s2) {
    alert("cadastrado com sucesso");
    return true;
  } else {
    alert("Senhas incorretas. Por favor verifique o valor digitado!");
    return false;
  }
}
