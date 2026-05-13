document.addEventListener("DOMContentLoaded", async () => {

    await listarExpositores();

});

async function listarExpositores() {

    try {

        const response = await fetch(
            "../api/expositores/listar.php"
        );

        const resultado = await response.json();

        if(resultado.status) {

            montarCards(resultado.dados);

        }

    } catch(error) {

        console.error(error);

    }

}

function montarCards(expositores) {

    const container = document.querySelector(".container-cards");

    container.innerHTML = "";

    expositores.forEach(expositor => {

        container.innerHTML += `
        
            <div class="card-expositor">

                <img
                    src="${expositor.logo}"
                    alt="${expositor.nome}"
                >

                <h2>${expositor.nome}</h2>

                <p>${expositor.descricao}</p>

                <span>${expositor.telefone}</span>

            </div>

        `;

    });

}