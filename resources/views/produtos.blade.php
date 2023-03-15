<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <title>Teste API</title>
    </head>
    <body>
        <div>
            @foreach ($fornecedorBrasil as $produto)
                <ul>
                    <li>{{ $produto['nome'] }}</li>
                    <li>{{ $produto['descricao'] }}</li>
                    <li>{{ $produto['categoria'] }}</li>
                    <li>{{ $produto['imagem'] }}</li>
                    <li>{{ $produto['preco'] }}</li>
                    <li>{{ $produto['material'] }}</li>
                    <li>{{ $produto['departamento'] }}</li>
                </ul> 
            @endforeach   
        </div>
    </body>

</html>
