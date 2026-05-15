<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Portfólio Rocketseat - PHP</title>
</head>
    <body class="bg-slate-900 text-white">

        <!-- modularizando código -->

        <!-- header.php -->
        <?php include("./componentes/header.php");?>

        <main class="mx-auto max-w-screen-lg min-h-20 px-3 py-6">

            <!-- hero.php(informações e redes) -->
            <?php include("./componentes/hero.php");?>

            <!-- projetos -->
            <section class=" space-y-3 py-8">

                <h2 class="text-2xl font-bold">Meus Projetos</h2>
                
                <!-- projetos.php -->
                <?php include("./componentes/projetos.php");?>    
        </main>

        <!-- footer.php -->
        <?php include("./componentes/footer.php");?>
    </body>
</html>
