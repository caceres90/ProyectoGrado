function showform(){
  var formulario = document.getElementById('Formulario');
  formulario.style.display = "block";  
}

document.querySelector('form').addEventListener('submit', isValid)

function isValid(e){
    e.preventDefault();
    var email = document.getElementById("email1");
    console.log(email);
    var username = document.getElementById("username1");
    console.log(username);
    var password1 = document.getElementById("Password1");
    var password2 = document.getElementById("Password2");
    var description = document.getElementById("description1");
    console.log(description);
    
    if (password1 == password2){
    password = password1;
    console.log(password1);
    console.log(password2)
    }else{
      prompt("La contraseña no coincide");
    }
}