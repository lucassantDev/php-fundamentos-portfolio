<?php
    $itens = [
        ['href' => '', 'src' => './img/twitter.png', 'alt' => 'Twitter Logo'],
        ['href' => '', 'src' => "./img/facebook.png", 'alt' => 'Facebook Logo'],
        ['href' => '', 'src' => "./img/linkedin.png", 'alt' => 'Linkedin Logo'],
        ['href' => '', 'src' => "./img/youtube.png", 'alt' => 'Youtube Logo'],
    ]

?>


<section class="flex gap-x-3">

    <!-- título e descrição -->
    <div class="w-2/3">
        <h1 class="text-3xl font-bold">Olá, me chamo Lucas!</h1>
        <p class="text-xl leading-8 mt-6">
            Desenvolvedor web que está sempre buscando a melhoria e constância na entrega do código!
            Atualmente estou com 20 anos
        </p>
        <ul class="flex gap-x-3 mt-3">

            <?php foreach($itens as $item):?>
                <li>
                    <a href="<?=$item['href'] ?>" target="_blank">
                        <img class="h-8" src=<?= $item['src'] ?> alt=<?= $item['alt'] ?>>
                    </a>
                </li>

                
            <?php endforeach; ?>

        </ul>
    </div>
    <!-- imagem -->
    <div class="w-1/3 flex items-center justify-center">
        <img class="h-60" src="./img/avatar.svg" alt="Foto avatar"/>
    </div>
</section>