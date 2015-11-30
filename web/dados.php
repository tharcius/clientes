<?php
use \BPad\Cliente\Types\Fisica;
use \BPad\Cliente\Types\Juridica;

$cliente0 = new Fisica(
    [
        'cliente'=>[
            'nome'      =>'Neville',
            'telefone'  =>'(62) 8527-2801',
            'email'     =>'longbottom@brasilpad.com',
            'cpfCnpj'   =>'000.000.000-01',
            'foto'      => 'rgba(0, 0, 0, 0) url("img/faces.png") repeat scroll -69px -218px',
            'grauImportancia'=> 2,
            'pessoaFisica' => 1
        ]
        ,
        'endereco'=>[
            'logradouro'=>'Rua Central, 102 - Centro',
            'cidade'    =>'Jaraguá',
            'uf'        =>'GO',
        ]
        ,
        'fisica'=>[
            'dataNascimento'=>'25/10/1980',
            'whatsapp'  =>'123.456',
            'estadoCivil'=>'Solteiro'
        ]
        ,
        'juridica'=>null
        ,
        'cobranca' => [
            'logradouro'=>'Estufa de Herbologia',
            'cidade'    =>'Hogwarts',
            'uf'        =>'UK'
        ]
    ]
);

$cliente1 = new Fisica(
    [
        'cliente'=>[
            'nome'      =>'Harry',
            'telefone'  =>'(62) 3326-2804',
            'email'     =>'harry@brasilpad.com',
            'cpfCnpj'   =>'000.000.000-04',
            'foto'      => 'rgba(0, 0, 0, 0) url("img/faces.png") repeat scroll -69px -322px',
            'grauImportancia'=> 5,
            'pessoaFisica'=>1
        ]
        ,
        'endereco'=>[
            'logradouro'=>'Rua dos Alfeneiros, 7 - Wallaby Way',
            'cidade'    =>'Jaraguá',
            'uf'        =>'GO',
        ]
        ,
        'fisica'=>[
            'dataNascimento'=>'25/10/1983',
            'whatsapp'  =>'123.459',
            'estadoCivil'=>'Casado'
        ]
        ,
        'juridica'=>null
        ,
        'cobranca'=>null
    ]
);

$cliente2 = new Fisica(
    [
        'cliente'=>[
            'nome'      =>'Ronald',
            'telefone'  =>'(62) 3326-2805',
            'email'     =>'rony@brasilpad.com',
            'cpfCnpj'   =>'000.000.000-05',
            'foto'      => 'rgba(0, 0, 0, 0) url("img/faces.png") repeat scroll -69px -114px',
            'grauImportancia'=> 4,
            'pessoaFisica'=>1
        ]
        ,
        'endereco'=>[
            'logradouro'=>'Rua Moacir Rios, 752 - Rural',
            'cidade'    =>'Jaraguá',
            'uf'        =>'GO',
        ]
        ,
        'fisica'=>[
            'dataNascimento'=>'25/10/1984',
            'whatsapp'  =>'123.460',
            'estadoCivil'=>'Casado'
        ]
        ,
        'juridica'=>null
        ,
        'cobranca'=>null
    ]
);

$cliente3 = new Fisica(
    [
        'cliente'=>[
            'nome'      =>'Ginevra',
            'telefone'  =>'(62) 3326-2806',
            'email'     =>'gina@brasilpad.com',
            'cpfCnpj'   =>'000.000.000-05',
            'foto'      => 'rgba(0, 0, 0, 0) url("img/faces.png") repeat scroll 0 -10px',
            'grauImportancia'=> 4,
            'pessoaFisica'=>1
        ]
        ,
        'endereco'=>[
            'logradouro'=>'Rua da Toca, 1 - Fazendinha',
            'cidade'    =>'Jaraguá',
            'uf'        =>'GO',
        ]
        ,
        'fisica'=>[
            'dataNascimento'=>'25/10/1985',
            'whatsapp'  =>'123.461',
            'estadoCivil'=>'Casada'
        ]
        ,
        'juridica'=>null
        ,
        'cobranca'=>null
    ]
);

$cliente4 = new Fisica(
    [
        'cliente'=>[
            'nome'      =>'Hermione',
            'telefone'  =>'(62) 3326-2807',
            'email'     =>'mione@brasilpad.com',
            'cpfCnpj'   =>'000.000.000-06',
            'foto'      => 'rgba(0, 0, 0, 0) url("img/faces.png") repeat scroll -138px -218px',
            'grauImportancia'=> 4,
            'pessoaFisica'=>1
        ]
        ,
        'endereco'=>[
            'logradouro'=>'Av. JK, 275 - Centro',
            'cidade'    =>'Jaraguá',
            'uf'        =>'GO',
        ]
        ,
        'fisica'=>[
            'dataNascimento'=>'25/10/1986',
            'whatsapp'  =>'123.462',
            'estadoCivil'=>'Casada'
        ]
        ,
        'juridica'=>null
        ,
        'cobranca'=>null
    ]
);

$cliente5 = new Juridica(
    [
        'cliente'=>[
            'nome'      =>'Dedos de Mel',
            'telefone'  =>'(62) 3326-3100',
            'email'     =>'dedosdemel@brasilpad.com',
            'cpfCnpj'   =>'00.000.000/0005-01',
            'foto'      => 'rgba(0, 0, 0, 0) url("img/logos.png") repeat scroll -141px -5px',
            'grauImportancia'=> 3,
            'pessoaFisica'=>0
        ]
        ,
        'endereco'=>[
            'logradouro'=>'4 loja da rua central',
            'cidade'    =>'Hogsmead',
            'uf'        =>'UK',
        ]
        ,
        'juridica'=>[
            'contato'   =>'Ambrósio Flume',
            'tipo'      =>'Loja de Doces',
            'url'       =>'www.dedosdemel.com.br'
        ]
        ,
        'fisica'=>null
        ,
        'cobranca'=>null
    ]
);

$cliente6 = new Juridica(
    [
        'cliente'=>[
            'nome'      =>'Olivaras',
            'telefone'  =>'(62) 3326-3105',
            'email'     =>'olivanders@brasilpad.com',
            'cpfCnpj'   =>'00.000.000/0005-02',
            'foto'      => 'rgba(0, 0, 0, 0) url("img/logos.png") repeat scroll -72px -3px',
            'grauImportancia'=> 2,
            'pessoaFisica'=>0
        ]
        ,
        'endereco'=>[
            'logradouro'=>'Beco diagonal, loja 11',
            'cidade'    =>'Londres',
            'uf'        =>'UK',
        ]
        ,
        'juridica'=>[
            'contato'   =>'Garrick Olivaras',
            'tipo'      =>'Fabricante de varinhas',
            'url'       =>'www.olivanders.com.br'
        ]
        ,
        'fisica'=>null
        ,
        'cobranca' => [
            'logradouro'=>'Cabana das Conchas',
            'cidade'    =>'Tinworth',
            'uf'        =>'UK'
        ]
    ]
);

$cliente7 = new Juridica(
    [
        'cliente'=>[
            'nome'      =>'Gemialidades Weasley',
            'telefone'  =>'(62) 3326-3110',
            'email'     =>'g.wesley@brasilpad.com',
            'cpfCnpj'   =>'00.000.000/0005-23',
            'foto'      => 'rgba(0, 0, 0, 0) url("img/logos.png") repeat scroll -210px -3px',
            'grauImportancia'=> 4,
            'pessoaFisica'=>0
        ]
        ,
        'endereco'=>[
            'logradouro'=>'Beco diagonal, loja 93',
            'cidade'    =>'Londres',
            'uf'        =>'UK',
        ]
        ,
        'juridica'=>[
            'contato'   =>'Jorge Weasley',
            'tipo'      =>'Loja de Logros',
            'url'       =>'www.gwesley.com.br'
        ]
        ,
        'fisica' =>null
        ,
        'cobranca' => [
            'logradouro'=>'A Toca',
            'cidade'    =>'Ottery St. Catchpole',
            'uf'        =>'UK'
        ]
    ]
);

$cliente8 = new Juridica(
    [
        'cliente'=>[
            'nome'      =>'Sorveteria Florean',
            'telefone'  =>'(62) 3326-3150',
            'email'     =>'sorveteria@brasilpad.com',
            'cpfCnpj'   =>'00.000.000/0005-10',
            'foto'      => 'rgba(0, 0, 0, 0) url("img/logos.png") repeat scroll -279px -3px',
            'grauImportancia'=> 1,
            'pessoaFisica'=>0
        ]
        ,
        'endereco'=>[
            'logradouro'=>'Beco diagonal, loja 19',
            'cidade'    =>'Londres',
            'uf'        =>'UK',
        ]
        ,
        'juridica'=>[
            'contato'   =>'Florean Fortescue',
            'tipo'      =>'Sorveteria',
            'url'       =>'www.floreanfortescue.com.br'
        ]
        ,
        'fisica'=>null
        ,
        'cobranca'=>null
    ]
);

$clientes = [$cliente0, $cliente1, $cliente2, $cliente3, $cliente4, $cliente5, $cliente6, $cliente7, $cliente8];

foreach ($clientes as $key => $cliente) {
    $cl[$cliente->getNome()]['id']            = $key;
    $cl[$cliente->getNome()]['nome']          = $cliente->getNome();
    $cl[$cliente->getNome()]['telefone']      = $cliente->getTelefone();
    $cl[$cliente->getNome()]['email']         = $cliente->getEmail();
    $cl[$cliente->getNome()]['foto']          = $cliente->getFoto();
    $cl[$cliente->getNome()]['grauImportancia'] = $cliente->getgrauImportancia();
    $cl[$cliente->getNome()]['cpfCnpj']       = $cliente->getcpfCnpj();
    $cl[$cliente->getNome()]['endereco']      = $cliente->getEndereco();
    $cl[$cliente->getNome()]['pessoaFisica']  = $cliente->getPessoaFisica();
    $cl[$cliente->getNome()]['cobranca']      = $cliente->getCobranca();
    if($cliente->getPessoaFisica()){
        $cl[$cliente->getNome()]['dataNascimento'] = $cliente->getDataNascimento();
        $cl[$cliente->getNome()]['estadoCivil'] = $cliente->getEstadoCivil();
        $cl[$cliente->getNome()]['whatsapp'] = $cliente->getWhatsapp();

    } else {
        $cl[$cliente->getNome()]['contato'] = $cliente->getContato();
        $cl[$cliente->getNome()]['tipo'] = $cliente->getTipo();
        $cl[$cliente->getNome()]['url'] = $cliente->getUrl();
    }
}
