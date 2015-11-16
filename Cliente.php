<?php
/**
 * Created by PhpStorm.
 * User: Tharcius
 * Date: 02/07/2015
 * Time: 15:50
 */
require_once "interfaces/iCliente.php";
require_once "interfaces/iGrauImportancia.php";
require_once "interfaces/iEnderecoCobranca.php";

class Cliente implements iCliente, iGrauImportancia, iEnderecoCobranca{
    protected $nome;
    protected $telefone;
    protected $email;
    protected $endereco;
    protected $cpfCnpj;
    protected $foto;
    protected $pessoaFisica;
    protected $cobranca;
    protected $grauImportancia;

    public function getNome(){
        return $this->nome;
    }

    public function getTelefone(){
        return $this->telefone;
    }

    public function getEmail(){
        return $this->email;
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

    public function getPessoaFisica()
    {
        return $this->pessoaFisica;
    }

    public function getCpfCnpj()
    {
        return $this->cpfCnpj;
    }

    public function setCpfCnpj($cpfCnpj)
    {
        $this->pessoaFisica = $cpfCnpj;
    }

    public function getGrauImportancia(){
        return $this->grauImportancia;
    }

    public function setGrauImportancia($grauImportancia){
        $this->grauImportancia = $grauImportancia;
    }

    public function getEnderecoCobranca(){
        return $this->cobranca;
    }

    public function __construct($dados){
        $cliente = $dados['cliente'];

        $this->nome         = $cliente['nome'];
        $this->telefone     = $cliente['telefone'];
        $this->email        = $cliente['email'];
        $this->foto         = $cliente['foto'];
        $this->classificacao= $cliente['classificacao'];
        $this->cpfCnpj      = $cliente["cpfCnpj"];
        $this->endereco     = $dados['endereco'];
        $this->cobranca     = $dados['cobranca'];
    }
}
