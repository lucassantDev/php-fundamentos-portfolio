<?php

$projetos = [
    [
        "titulo" => "Meu Portfolio",
        "finalizado" => false,
        "ano" => 2021,
        "descricao" => "Meu primeiro Portfolio (PHP e HTML)",
        "stack" => ['PHP', 'HTML', 'JS', 'CSS'],
        "img" => ""

    ],
    [
        "titulo" => "Lista de Tarefas",
        "finalizado" => true,
        "ano" => 2022,
        "descricao" => "Lista de tarefas. Escrito em PHP e HTML",
        "stack" => ['PHP', 'HTML', 'JS', 'CSS'],
        "img" => ""
    ],
];


?>


<?php foreach($projetos as $projeto):?>
    <div class="bg-slate-800 rounded-lg p-3 flex items-center">

        <div class=" w-1/5 flex items-center justify-middle" >
            <img src="<?= $projeto['img'] ?>" class='h-10' alt="imagem do projeto">
        </div>
        <div class=" w-4/5 space-y-3">
            <div class="flex gap-3 justify-between">
                
                <h3 class="text-semibold text-xl">

                    <?php if($projeto['finalizado']): ?>✅<?php endif; ?>
                    

                    <?= $projeto['titulo'] ?> 
                    <?php if($projeto['finalizado']): ?> <span class="text-xs text-gray-400 italic">(finalizado em <?= $projeto['ano'] ?>)</span><?php endif; ?>
                </h3>
                <div class="space-x-1">
                    <!-- listas de stacks -->
                        
                     <?php 
                     
                    $colors = ['fuchsia', 'lime', 'sky', 'rose', 'amber', 'teal', 'purple'];

                    foreach($projeto['stack'] as $posicao => $language): ?>

                        <span class="bg-<?= $colors[$posicao] ?>-400 text-fuchsia-900 rounded-md px-2 py-px font-semibold text-xs">
                            <?=$language?>
                        </span>
    
                    <?php endforeach; ?>
                </div>
            </div>
            <p class="leading-6 my-3">
                <?= $projeto['descricao'] ?>
            </p>
        </div>
    </div>
<?php endforeach; ?>