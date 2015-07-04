<?php
/**
 * Created by PhpStorm.
 * User: Tharcius
 * Date: 02/07/2015
 * Time: 15:50
 */

class Cliente {
    public $nome;
    public $telefone;
    public $email;
    public $dadosPessoais;
    public $endereco;

    public function __construct($dados){
        /**
         * $dados['cliente'] = informações pessoais do cliente
         * $dados['endereco'] = informações de endereçamento
         * $dados['dadosPessoais'] = dados pessoais e documentação do cliente
         */
        $cliente = $dados['cliente'];

        $this->nome         = $cliente['nome'];
        $this->dadosPessoais= $dados['dadosPessoais'];
        $this->endereco     = $dados['endereco'];
        $this->telefone     = $cliente['telefone'];
        $this->email        = $cliente['email'];
    }
}
