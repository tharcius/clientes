<?php
include_once 'classes.php';
include_once 'head.php';

$cliente = $cl[$_GET['id']];
$pessoa = 'juridica';
if ($cliente['fisica'])
    $pessoa = 'fisica';

?>

<div class="row">
    <div class="col s12 m12 l12">
        <div class="col s12 m12 l12">
            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <span class="card-title"><i class="foto-user" style='background: <?php echo($cliente['foto']) ?>; width: 69px; height: 80px;'>&nbsp;</i><a href="#" class="cyan-text text-darken-1" style="text-shadow: -2px 2px 3px #000; font-weight: bold"><?php echo $cliente['nome']; ?></a></span>
                    <p><i class="estrela<?php echo($cliente['classificacao']) ?>">&nbsp;</i></p>
                    <div class="col s12 m12 l12">
                        <div class="col s6 m6 l6">
                            <p><b>Telefone:</b> <?php echo $cliente['telefone']; ?></p>
                            <p><b>e-mail:</b> <?php echo $cliente['email']; ?></p>
                            <p><b>Endereço</b><br><?php echo $cliente['endereco']['logradouro']; ?><br>
                        <?php echo "{$cliente['endereco']['cidade']} - {$cliente['endereco']['uf']}"; ?></p>
                        </div>
                        <?php
                            if($cliente['fisica']){ ?>
                        <div class="col s6 m6 l6">
                            <p><b>Data de Nascimento:</b> <?php echo $cliente['fisica']['dataNascimento']; ?></p>
                            <p><b>WhatsApp:</b> <?php echo $cliente['fisica']['whatsapp']; ?> </p>
                            <p><b>Estado Cívil:</b> <?php echo $cliente['fisica']['estadoCivil']; ?></p>
                        </div><?php
                            }
                            else {?>
                        <div class="col s6 m6 l6">
                            <p><b>Contato:</b> <?php echo $cliente['juridica']['contato']; ?></p>
                            <p><b>Tipo da Empresa:</b> <?php echo $cliente['juridica']['tipo']; ?> </p>
                            <p><b>Endereço Web:</b> <?php echo $cliente['juridica']['url']; ?></p>
                        </div><?php
                            }
                        ?>
                        <div class="tipo-pessoa">
                            <img src="img/icon-pessoa-<?php echo $pessoa;?>.png" alt=""> <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once 'footer.php'; ?>

