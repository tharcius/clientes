<?php
include_once 'classes.php';
include_once 'head.php';

$cliente = $cl[$_GET['id']];
?>

<div class="row">
    <div class="col s12 m16 l12">
        <div class="col s12 m4 l4">
            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <span class="card-title"><i class="foto-user" style='background: <?php echo($cliente['foto']) ?>; width: 69px; height: 80px;'>&nbsp;</i><a href="#" class="cyan-text text-darken-1" style="text-shadow: -2px 2px 3px #000; font-weight: bold"><?php echo $cliente['nome']; ?></a></span>
                    <p><b>Telefone:</b> <?php echo $cliente['telefone']; ?></p>
                    <p><b>e-mail:</b> <?php echo $cliente['email']; ?></p>
                    <p><b>Endereço</b><br><?php echo $cliente['endereco']['logradouro']; ?><br>
                    <?php echo "{$cliente['endereco']['cidade']} - {$cliente['endereco']['uf']}"; ?></p>
                    <?php
                        if($cliente['fisica']){ ?>
                    <p><b>Data de Nascimento:</b> <?php echo $cliente['fisica']['dataNascimento']; ?></p>
                    <p><b>WhatsApp:</b> <?php echo $cliente['fisica']['whatsapp']; ?> </p>
                    <p><b>Estado Cívil:</b> <?php echo $cliente['fisica']['estadoCivil']; ?></p><?php
                        }
                        else {?>
                    <p><b>Contato:</b> <?php echo $cliente['juridica']['contato']; ?></p>
                    <p><b>Tipo da Empresa:</b> <?php echo $cliente['juridica']['tipo']; ?> </p>
                    <p><b>Endereço Web:</b> <?php echo $cliente['juridica']['url']; ?></p><?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once 'footer.php'; ?>

