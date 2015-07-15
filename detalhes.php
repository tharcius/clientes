<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

include_once 'Cliente.php';
include_once 'dados.php';
include_once 'head.php';
$cliente = $cl[$_GET['id']];
?>

<div class="row">
    <div class="col s12 m16 l12">
        <div class="col s12 m4 l4">
            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <span class="card-title"><i class="foto-user0<?php echo $cliente['id']; ?>"></i><a href="#" class="cyan-text text-darken-1" style="text-shadow: -2px 2px 3px #000; font-weight: bold"><?php echo $cliente['nome']; ?></a></span>
                    <p>Telefone: <?php echo $cliente['telefone']; ?></p>
                    <p>e-mail: <?php echo $cliente['email']; ?></p>
                    <p>Endereço<br><?php echo $cliente['endereco']['logradouro']; ?><br>
                    <?php echo "{$cliente['endereco']['cidade']} - {$cliente['endereco']['uf']}"; ?></p>
                    <p>Data de Nascimento: <?php echo $cliente['dadosPessoais']['dataNascimento']; ?></p>
                    <p>CPF: <?php echo $cliente['dadosPessoais']['cpf']; ?> -
                    RG: <?php echo $cliente['dadosPessoais']['rg']; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once 'footer.php'; ?>