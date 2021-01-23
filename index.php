<!doctype = html>
    <html lang="pt-br">
    <head>
        <title>Título</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <?php
            $idade = 18;
            
            if($idade >= 18){
                echo "<h1 style='color:green'> Autorizado </h1>";
            } else {
                echo "<h1 style='color:red'> Negado </h1>";    
            }
        ?>
    </body>
</html>
