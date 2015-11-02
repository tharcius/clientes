<?php
/**
 * Created by PhpStorm.
 * User: Tharcius
 * Date: 02/07/2015
 * Time: 15:50
 */

class Cliente {
    private $nome;
    private $telefone;
    private $email;
    private $endereco;
    private $foto;
    private $classificacao;
    private $cpfCnpj;
    private $fisica;
    private $juridica;
    private $cobranca;

    public function getNome(){
        return $this->nome;
    }

    public function getTelefone(){
        return $this->telefone;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getDadosPessoais(){
        return $this->dadosPessoais;
    }

    public function getEndereco(){
        return $this->endereco;
    }

    public function getCobranca(){
        return $this->cobranca;
    }

    public function getFoto()
    {
        return $this->foto;
    }

    public function getClassificacao(){
        return $this->classificacao;
    }

    public function getCpfCnpj()
    {
        return $this->cpfCnpj;
    }

    public function getFisica(){
        return $this->fisica;
    }

    public function getJuridica(){
        return $this->juridica;
    }

    public function __construct($dados){
        /**
         * $dados['cliente']  = informações pessoais do cliente
         * $dados['endereco'] = informações de endereçamento
         * $dados['fisica']   = dados pessoais e documentação do cliente físico
         * $dados['juridica'] = dados e documentação do cliente jurídico
         */

        $cliente = $dados['cliente'];

        $this->nome         = $cliente['nome'];
        $this->telefone     = $cliente['telefone'];
        $this->email        = $cliente['email'];
        $this->foto         = $cliente['foto'];
        $this->classificacao= $cliente['classificacao'];
        $this->cpfCnpj      = $cliente['cpfCnpj'];
        $this->endereco     = $dados['endereco'];
        $this->fisica       = $dados['fisica'];
        $this->juridica     = $dados['juridica'];
        $this->cobranca     = $dados['cobranca'];
    }
}
