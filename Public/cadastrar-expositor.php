<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cadastrar Expositor</title>

    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

    <main class="container">

        <h1>Cadastrar Expositor</h1>

        <form id="form-expositor">

            <div>
                <label>Nome</label>

                <input
                    type="text"
                    name="nome"
                    id="nome"
                    required
                >
            </div>

            <div>
                <label>Telefone</label>

                <input
                    type="text"
                    name="telefone"
                    id="telefone"
                    required
                >
            </div>

            <div>
                <label>Descrição</label>

                <textarea
                    name="descricao"
                    id="descricao"
                    required
                ></textarea>
            </div>

            <div>
                <label>Logo</label>

                <input
                    type="file"
                    name="logo"
                    id="logo"
                    accept="image/*"
                    required
                >
            </div>

            <button type="submit">
                Cadastrar
            </button>

        </form>

        <div id="mensagem"></div>

    </main>

    <script src="assets/js/js-cadastrar-expositor.js"></script>

</body>

</html>