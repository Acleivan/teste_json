<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>PHP com AJAX</title>
    </head>

    <body>
        <div id="listagem"></div>
        <script src="jquery.js"></script>
        <script>
            $.getJSON('_json/produtos.json', function(data) {
                $.each(data, function(i, valor) {
                
                // ATENTAR PARA PONTUAÇÃO. apos o valor na função, inserir " . " + nome do item
                console.log(valor.nomeproduto);
                });
            });
        </script>
    </body>
</html>
