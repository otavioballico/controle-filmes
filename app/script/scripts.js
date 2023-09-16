// scripts.js
document.addEventListener("DOMContentLoaded", function() {
    const notaContainer = document.getElementById("nota-container");
    const addNotaButton = document.getElementById("add-nota");

    addNotaButton.addEventListener("click", function() {
        const newInputNota = document.createElement("input");
        newInputNota.type = "number";
        newInputNota.className = "form-control mt-2";
        newInputNota.name = "nota[]";
        newInputNota.placeholder = "Digite uma nota (de 0 a 10)";
        newInputNota.step = "0.1"; // Define o passo como 0.1 para permitir decimais
        newInputNota.min = "0";    // Define o valor mínimo como 0
        newInputNota.max = "10";   // Define o valor máximo como 10
        notaContainer.appendChild(newInputNota);

        // Adicionar campo "Inserido Por" quando adiciona uma nota
        const newInputInseridoPor = document.createElement("input");
        newInputInseridoPor.type = "text";
        newInputInseridoPor.className = "form-control mt-2";
        newInputInseridoPor.name = "inserido_por[]";
        newInputInseridoPor.placeholder = "Inserido Por";
        notaContainer.appendChild(newInputInseridoPor);
    });
});


document.addEventListener("DOMContentLoaded", function() {
    // Seu código JavaScript aqui


// Função para exibir o alerta ao adicionar um filme com sucesso
function mostrarAlerta() {
    Swal.fire({
        title: "Filme Adicionado!",
        text: "Seu filme foi adicionado com sucesso.",
        icon: "success"
    }).then(function() {
        // Após o usuário clicar em "OK", envie o formulário
        document.getElementById("login-form").submit();
    });
}


// Função para exibir o alerta de erro ao não preencher todos os campos
function mostrarErro() {
    Swal.fire({
        title: "Erro!",
        text: "Preencha todos os campos do formulário.",
        icon: "error"
    });
}

// Evento de envio do formulário
document.getElementById("login-form").addEventListener("submit", function(event) {
    event.preventDefault();

    var nomeFilme = document.getElementById("nome_filme").value;
    var genero = document.getElementById("genero").value;

    console.log("Nome do filme:", nomeFilme);
    console.log("Gênero:", genero);

    if (nomeFilme.trim() === "" || genero.trim() === "") {
        mostrarErro();
    } else {
        mostrarAlerta();
    }
});

});


//evento de repedir a caixa de inserir numero
