<?php
include_once 'Cliente.php';
include_once 'dados.php';
include_once 'head.php';
?>

    <nav>
        <div class="nav-wrapper light-blue accent-4">
            <a href="#" class="brand-logo">BrasilPAD</a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="index.php" class="waves-effect waves-light btn-large blue-grey darken-1">Clientes</a></li>
            </ul>
            <ul class="side-nav" id="mobile-demo">
                <li><a href="index.php">Clientes</a></li>
            </ul>
        </div>
    </nav>
    <p></p>

    <h3>Listagem de Clientes</h3>

    <div class="row">
        <div class="col s12 m16 l12">

<?php
foreach ($clientes as $key=>$cliente){
?>
            <div class="col s12 m4 l4">
                <div class="card blue-grey darken-1">
                    <div class="card-content white-text">
                        <span class="card-title" ><i class="foto-user0<?php echo $key; ?>"></i><a href="#" class="cyan-text text-darken-1" style="text-shadow: -2px 2px 3px #000; font-weight: bold"><?php echo $cliente->getNome(); ?></a></span>
                        <p><?php echo $cliente->getTelefone(); ?></p>
                        <p><?php echo $cliente->getEmail(); ?></p>
                    </div>
                    <div class="card-action right">
                        <a href="#">Mais informações</a>
                    </div>
                </div>
            </div>
<?
}
?>
        </div>
    </div>


<?php include_once 'footer.php'; ?>