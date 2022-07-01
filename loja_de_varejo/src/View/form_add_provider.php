<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja de varejo - Fornecedor de produtos</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <form action="../controller/Provider.php" method="POST">
        <fieldset class="p-4 m-5 border border-blue-400">
            <legend>Dados do fornecedor</legend>
            <section class="columns-2">
                <article>
                    <label for="name">Nome</label>
                    <input type="text" id="name" name="name" class="border border-blue-400" required minlength="5">
                </article>
                <article>
                    <label for="cost">CNPJ</label>
                    <input type="text" id="cnpj" name="number" class="border border-blue-400" required min="1" max="1000">
                </article>
            </section>
            <section class="mt-4 columns-2">
                <article>
                    <label for="quantity">Telefone</label>
                    <input type="number" id="telefone" name="quantity" class="border border-blue-400" required min="1" max="1000">
                </article>
            </section>
        </fieldset>
        <fieldset class="p-4 m-5 border border-blue-400">
            <legend>Dados Endereço</legend>
            <section class="columns-2">
            <article>
                    <label for="cost">Logradouro</label>
                    <input type="text" id="logradouro" name="number" class="border border-blue-400" required min="1" max="1000">
                </article>
                <article>
                    <label for="name">Nº</label>
                    <input type="text" id="numero" name="number" class="border border-blue-400" required minlength="5">
                </article>
            </section>
            <section class="mt-4 columns-2">
                <article>
                    <label for="quantity">bairro</label>
                    <input type="text" id="bairro" name="name" class="border border-blue-400" required min="1" max="1000">
                </article>
            </section>
            <article class="flex justify-center mt-4">
                <button type="submit" class="p-4 text-white bg-blue-700 rounded">Entrar</button>
            </article>
        </fieldset>
        </fieldset>
    </form>
</body>

</html>
<!-- dados fornecidos -->
<!-- dados do endereço  -->
<!-- logradouro: bairro, nome -->
<!--  -->