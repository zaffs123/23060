var senha = document.getElementById("senha")
  , confirmar_senha = document.getElementById("confirmar_senha");

function validatesenha(){
  if(senha.value != confirmar_senha.value) {
    confirmar_senha.setCustomValidity("Senhas diferentes!");
  } else {
    confirmar_senha.setCustomValidity('');
  }
}

senha.onchange = validatesenha;
confirmar_senha.onkeyup = validatesenha;
