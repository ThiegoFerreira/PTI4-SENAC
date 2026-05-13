const form = document.querySelector("#form-expositor");

form.addEventListener("submit", async (event) => {

    event.preventDefault();

    try {

        const formData = new FormData(form);

        const response = await fetch(
            "../api/expositores/cadastrar.php",
            {
                method: "POST",
                body: formData
            }
        );

            const texto = await response.text();

            console.log(texto);

        form.reset();

    } catch(error) {

        console.error(error);

    }

});