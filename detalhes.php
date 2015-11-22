<?php
    include_once 'classes.php';
    include_once 'head.php';
    include_once 'src/BPad/Cliente/Database/dados.php';

    $cliente = $cl[$_GET['id']];

    $pessoa = 'juridica';
    if ($cliente['pessoaFisica'])
        $pessoa = 'fisica';

?>


<div class="row">
    <div class="col s12 m12 l12">
        <div class="col s12 m12 l12">
            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <span class="card-title"><i class="foto-user" style='background: <?php echo($cliente['foto']) ?>; width: 69px; height: 80px;'>&nbsp;</i><a href="#" class="cyan-text text-darken-1" style="text-shadow: -2px 2px 3px #000; font-weight: bold"><?php echo $cliente['nome']; ?></a></span>
                    <p><i class="estrela<?php echo($cliente['grauImportancia']) ?>">&nbsp;</i></p>
                    <div class="col s12 m12 l12">
                        <div class="col s6 m6 l6">
                            <p><b>Telefone:</b> <?php echo $cliente['telefone']; ?></p>
                            <p><b>e-mail:</b> <?php echo $cliente['email']; ?></p>
                            <?php
                            if($cliente['pessoaFisica']){ ?>
                                <p><b>CPF:</b> <?php echo $cliente['cpfCnpj']; ?></p>
                            <?php }
                            else {?>
                                <p><b>CNPJ:</b> <?php echo $cliente['cpfCnpj']; ?></p>
                            <?php } ?>
                            <p><b>Endereço</b><br><?php echo $cliente['endereco']['logradouro']; ?><br>

                        <?php echo "{$cliente['endereco']['cidade']} - {$cliente['endereco']['uf']}"; ?></p>
                        </div>
                        <?php
                            if($cliente['pessoaFisica']){ ?>
                        <div class="col s6 m6 l6">
                            <p><b>Data de Nascimento:</b> <?php echo $cliente['dataNascimento']; ?></p>
                            <p><b>WhatsApp:</b> <?php echo $cliente['whatsapp']; ?> </p>
                            <p><b>Estado Cívil:</b> <?php echo $cliente['estadoCivil']; ?></p>
                        </div><?php
                            }
                            else {?>
                        <div class="col s6 m6 l6">
                            <p><b>Contato:</b> <?php echo $cliente['contato']; ?></p>
                            <p><b>Tipo da Empresa:</b> <?php echo $cliente['tipo']; ?> </p>
                            <p><b>Endereço Web:</b> <?php echo $cliente['url']; ?></p>
                        </div><?php
                            }
                        ?>
                        <div class="tipo-pessoa">
                            <img src="img/icon-pessoa-<?php echo $pessoa;?>.png" alt=""> <br>
                        </div>
                        <div class="endereco-cobranca">
                            <?php
                                if($cliente['cobranca']){
                            ?>
                            <div class="col s12 m12 l12 card endereco">
                                <p>&nbsp;</p>
                                <p><b><h5>Endereço de Cobrança</h5></b>
                                <h6>
                                <p><?php echo $cliente['cobranca']['logradouro']; ?><br></p>
                                <p><?php echo "{$cliente['cobranca']['cidade']} - {$cliente['cobranca']['uf']}"; ?></p>
                                </h6><p>&nbsp;</p>
                            </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once 'footer.php'; ?>

