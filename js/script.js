const senha = document.getElementById("senha");
const mostrarsenha = document.getElementById("mostrarsenha");

mostrarsenha.addEventListener("click", function() {

    if (senha.type === "password") {
        senha.type = "text";
        mostrarsenha.textContent = "";

    } else{
        senha.type = "password";
        mostrarsenha.textContent = ""
    }


    });
















