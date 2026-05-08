<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfólio Rocketseat - PHP</title>
</head>
<body>

    <?php
        $primeiro_paragrafo = 'Olá';
        $segundo_paragrafo = 'inicio do curso de php';
    ?>

    <h1>
        Fundamentos PHP
    </h1>
    <p>
        <?=$primeiro_paragrafo ?>
    </p>
    <h2>
        Foreach e listas
    </h2>

    <?php
        
        // array 
        $projetos = [
            'Portfólio',
            'To-do list',
            'Sistema de cadastro',
            'Sistema de restaurante'
        ];

        // array associativo
        $usuarios = [
            [
                "Nome" => "Lucas Ferreira",
                "Idade" => 20,
                "Estado" => "PE",
                "Cidade" => "Recife"
            ],
             [
                "Nome" => "Outro Usuário",
                "Idade" => 25,
                "Estado" => "SP",
                "Cidade" => "São Paulo"
            ]
            

        ];
    
    ?>

    <p>Foreach e lista SEM nomes e setas</p>
    <ul>
        <?php foreach($projetos as $projeto){
            echo "<p>{$projeto}</p>";
        } 
        ?>
    </ul>

    <p>Foreach e lista COM nomes e setas</p>
    <ul>
        <?php foreach($usuarios as $usuario){

            echo "<li>{$usuario['Nome']}</li>";
            echo "<li>{$usuario['Idade']}</li>";
            echo "<li>{$usuario['Estado']}</li>";
            echo "<li>{$usuario['Cidade']}</li>";
            echo "------------------------------";
        } 
        ?>
    </ul>
    
</body>
</html>