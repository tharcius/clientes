<?php
    include_once 'classes.php';
    include_once 'head.php';
?>
<h3>Listagem de Clientes
<?php
    $ordenacao = filter_input(INPUT_GET, 'ord');
    if ($ordenacao == 'asc') {
        ksort($cl);
        echo "<a href='/index.php?ord=desc'><img src='img/up.png'></a>";
    } elseif (($ordenacao != 'asc') and (!$ordenacao == null) ) {
        krsort($cl);
        echo "<a href='/index.php?ord=asc'><img src='img/down.png'></a>";
    } else {
        echo "<a href='/index.php?ord=asc'><img src='img/down.png'></a>";
    }
?>
</h3>

<div class="row">
    <div class="col s12 m16 l12">

        <?php
        foreach ($cl as $cliente){
            $pessoa = 'juridica';
            if ($cliente['fisica'])
                $pessoa = 'fisica';
            ?>

            <div class="col s12 m4 l4">
                <div class="card blue-grey darken-1">
                    <div class="card-content white-text">
                        <span class="card-title"><i class="foto-user" style='background: <?php echo($cliente['foto']) ?>; width: 69px; height: 80px;'>&nbsp;</i><a href="detalhes.php?id=<?php echo $cliente['nome']; ?>" class="cyan-text text-darken-1" style="text-shadow: -2px 2px 3px #000; font-weight: bold"><?php echo $cliente['nome']; ?></a></span>
                        <p><?php echo $cliente['telefone']; ?></p>
                        <p><?php echo $cliente['email']; ?></p>
                    </div>
                    <div class="card-action right">
                        <a href="detalhes.php?id=<?php echo $cliente['nome']; ?>">Mais informações</a>
                    </div>
                    <div class="tipo-pessoa">
                        <img src="img/icon-pessoa-<?php echo $pessoa;?>.png" alt=""> <br>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>

<?php include_once 'footer.php'; ?>
